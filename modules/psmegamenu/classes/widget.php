<?php
/**
 * Pts Prestashop Theme Framework for Prestashop 1.7.x
 *
 * @package   psmegamenu
 * @version   2.5.0
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) November 2016 prestabrain.com <@emai:prestabrain@gmail.com>
 *               <info@prestabrain.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */
require_once(_PS_CLASS_DIR_.'PhpEncryptionLegacyEngine.php');
if (!class_exists('PsMegamenuWidget'))
{
	class PsMegamenuWidget extends ObjectModel {

		public $name;
		public $type;
		public $params;
		public $key_widget;
		public $id_shop;
		private $widgets = array();
		public $mod_name = 'psmegamenu';
		public $theme = '';
		public $lang_id = 1;
		public $engines = array();
		public $engine_types = array();

		public function setTheme($theme)
		{
			$this->theme = $theme;
			return $this;
		}

		public static $definition = array(
			'table' => 'psmegamenu_widgets',
			'primary' => 'id_widget',
			'fields' => array(
				'name' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255),
				'type' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'size' => 255),
				'params' => array('type' => self::TYPE_HTML, 'validate' => 'isString'),
				'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
				'key_widget' => array('type' => self::TYPE_STRING, 'validate' => 'isunsignedInt', 'size' => 11)
			)
		);

		public function __construct($id_widget = null, $id_lang = null, $id_shop = null)
		{
			parent::__construct($id_widget, $id_lang, $id_shop);
		}

		/**
		 * Get translation for a given module text
		 *
		 * Note: $specific parameter is mandatory for library files.
		 * Otherwise, translation key will not match for Module library
		 * when module is loaded with eval() Module::getModulesOnDisk()
		 *
		 * @param string $string String to translate
		 * @param boolean|string $specific filename to use in translation key
		 * @return string Translation
		 */
		public function l($string, $specific = false, $locale = null)
		{
			return Translate::getModuleTranslation($this->mod_name, $string, ($specific) ? $specific : $this->mod_name);
		}

		public function loadEngines()
		{
			if (!$this->engines)
			{
				$wds = glob(dirname(__FILE__).'/widget/*.php');
				foreach ($wds as $w)
				{
					$paths = explode('/', $w);
					$last = array_pop($paths);
					if ($last != 'index.php')
					{
						require_once($w);
						$f = str_replace('.php', '', basename($w));
						$class = 'PsMegamenuWidget'.Tools::ucfirst($f);

						if (class_exists($class))
						{
							$this->engines[$f] = new $class;
							$this->engines[$f]->id_shop = Context::getContext()->shop->id;
							$this->engines[$f]->lang_id = Context::getContext()->language->id;
							$this->engine_types[$f] = $this->engines[$f]->getWidgetInfo();
							$this->engine_types[$f]['type'] = $f;
						}
					}
				}
			}
		}

		/**
		 * get list of supported widget types.
		 */
		public function getTypes()
		{
			return $this->engine_types;
		}

		/**
		 * get list of widget rows.
		 */
		public function getWidgets()
		{
			$sql = ' SELECT * FROM '._DB_PREFIX_.'psmegamenu_widgets WHERE `id_shop` = '.(int)Context::getContext()->shop->id;
			return Db::getInstance()->executeS($sql);
		}

		public function deleteItem($id)
		{
			$sql = ' DELETE FROM '._DB_PREFIX_.'psmegamenu_widgets WHERE id_widget='.(int)$id;
			return Db::getInstance()->execute($sql);
		}

		/**
		 * get widget data row by id
		 */
		public function getWidetById($id)
		{
			$output = array(
				'id' => '',
				'id_widget' => '',
				'name' => '',
				'params' => '',
				'type' => '',
			);
			if (!$id)
				return $output;
			$sql = ' SELECT * FROM '._DB_PREFIX_.'psmegamenu_widgets WHERE id_widget='.(int)$id;

			$row = Db::getInstance()->getRow($sql);

			if ($row)
			{
				$output = array_merge($output, $row);
				$params = unserialize($output['params']);
				if ($params)
					foreach ($params as $key => $value)
						$params[$key] = htmlspecialchars_decode(Tools::stripslashes($value));
				$output['params'] = $params;
				$output['id'] = $output['id_widget'];
			}
			return $output;
		}

		/**
		 * get widget data row by id
		 */
		public function getWidetByKey($key)
		{
			$output = array(
				'id' => '',
				'id_widget' => '',
				'name' => '',
				'params' => '',
				'type' => '',
				'key_widget' => '',
			);
			if (!$key)
				return $output;
			$sql = ' SELECT * FROM '._DB_PREFIX_.'psmegamenu_widgets WHERE key_widget='.(int)$key;

			$row = Db::getInstance()->getRow($sql);
			//	echo '<pre>'.print_r($row, 1);die;
			if ($row)
			{
				$output = array_merge($output, $row);
				$params = unserialize($output['params']);
				if ($params)
					foreach ($params as $key => $value)
						$params[$key] = htmlspecialchars_decode(Tools::stripslashes($value));
				$output['params'] = $params;
				$output['id'] = $output['id_widget'];
			}
			return $output;
		}

		/**
		 * Save Data Post in database
		 */
		public function saveData($post)
		{
			$data = array(
				'id' => '',
				'params' => '',
				'type' => '',
				'name' => ''
			);
			$data = array_merge($data, $post);
			if (empty($data['name']))
				return;

			if ($data['params'])
				$data['params'] = $this->mscript->encrypt(serialize($data['params']));
			$id = $data['id'];

			unset($data['id']);

			if ($id)
			{
				$sql = ' UPDATE  '._DB_PREFIX_.'psmegamenu_widgets SET ';
				$tmp = array();
				foreach ($data as $key => $value)
					$tmp[] = '`'.pSQL($key).'`=\''.pSQL($value).'\'';
				$sql .= implode(',', $tmp).' WHERE id_widget='.(int)$id;

				Db::getInstance()->execute($sql);
			}
			elseif ($data['params'])
			{
				$data['key_widget'] = time();
				$data['id_shop'] = Context::getContext()->shop->id;
				$sql = ' INSERT INTO '._DB_PREFIX_.'psmegamenu_widgets('.pSQL(implode(',', array_flip($data))).')';
				$tmp = array();
				foreach ($data as $value)
					$tmp[] = '\''.pSQL($value).'\'';
				$sql .= ' VALUES('.pSQL(implode(',', $tmp)).') ';

				Db::getInstance()->execute($sql);
				$id = Db::getInstance()->Insert_ID();
			}
			$data['id'] = $id;
			return $data;
		}

		/**
		 * render widget Links Form.
		 */
		public function getWidgetInformationForm($data)
		{
			$fields = array(
				'html' => array('type' => 'textarea', 'value' => '', 'lang' => 1, 'values' => array(), 'attrs' => 'cols="40" rows="6"')
			);
			return $this->_renderFormByFields($fields, $data);
		}
		/**
		 * general function to render FORM
		 *
		 * @param String $type is form type.
		 * @param Array default data values for inputs.
		 *
		 * @return Text.
		 */
		public function getForm($type, $data = array())
		{
			if (isset($this->engines[$type]))
			{
				$this->engines[$type]->types = $this->getTypes();
				return $this->engines[$type]->renderForm($data);
			}
			return $this->l('Sorry, Form Setting is not avairiable for this type');
		}

		public function getWidgetInfo($type)
		{
			if (isset($this->engines[$type]))
				return $this->engines[$type]->getWidgetInfo();
			return null;
		}

		/**
		 *
		 */
		public function getWidgetContent($type, $data)
		{
			$data['widget_heading'] = isset($data['widget_title_'.$this->lang_id]) ? $data['widget_title_'.$this->lang_id] : '';
			if (isset($this->engines[$type]))
				return $this->engines[$type]->renderContent($data);
			return '';
		}

		/**
		 *
		 */
		public function renderContent($id)
		{
			$output = array('id' => $id, 'type' => '', 'data' => '');

			if (isset($this->widgets[$id]))
			{
				$data = unserialize($this->widgets[$id]['params']);
				if ($data)
					foreach ($data as $key => $value)
						$data[$key] = htmlspecialchars_decode(Tools::stripslashes($value));
				$output = $this->getWidgetContent($this->widgets[$id]['type'], $data);
			}
			return $output;
		}

		public function loadWidgets()
		{
			if (empty($this->widgets))
			{
				$widgets = $this->getWidgets();
				foreach ($widgets as $widget)
				{
					$widget['id'] = $widget['id_widget'];
					$this->widgets[$widget['key_widget']] = $widget;
				}
			}
		}

		public function getWidgetsList()
		{
			return $this->widgets;
		}

	}

}
