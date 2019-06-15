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

if (!defined('_PS_VERSION_'))
	exit;

include_once(_PS_MODULE_DIR_.'psmegamenu/loader.php');
require_once(_PS_CLASS_DIR_.'PhpEncryptionLegacyEngine.php');
class PsMegaMenu extends Module {

	private $_html = '';
	private $configs = '';
	protected $params = null;
	public $_languages;
	public $_defaultFormLanguage;
	public $base_config_url;
	public $widget;
	public $mcrypt;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->name = 'psmegamenu';
		$this->tab = 'front_office_features';
		$this->version = '2.5.0';
		$this->author = 'PrestaBrain';
		$this->need_instance = 0;
		$this->bootstrap = true;
		$this->secure_key = Tools::encrypt($this->name);
		parent::__construct();

		$this->displayName = $this->l('Ps Megamenu');
		$this->description = $this->l('Ps Megamenu Support Pts Framework Version 2.0');
		$this->languages();
		$this->widget = new PsMegamenuWidget();
	}

	/**
	 *
	 */
	public function languages()
	{
		//global $cookie;
		$cookie = $this->context->cookie;
		$allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		if ($allow_employee_form_lang && !$cookie->employee_form_lang)
			$cookie->employee_form_lang = (int)Configuration::get('PS_LANG_DEFAULT');
		$use_lang_from_cookie = false;
		$this->_languages = Language::getLanguages(false);
		if ($allow_employee_form_lang)
			foreach ($this->_languages as $lang)
				if ($cookie->employee_form_lang == $lang['id_lang'])
					$use_lang_from_cookie = true;
		if (!$use_lang_from_cookie)
			$this->_defaultFormLanguage = (int)Configuration::get('PS_LANG_DEFAULT');
		else
			$this->_defaultFormLanguage = (int)$cookie->employee_form_lang;
	}

	/**
	 * @see Module::install()
	 */
	public function install()
	{
		$this->checkOwnerHooks();
		/* Adds Module */
		if (parent::install() && $this->registerHook('displayMainmenu') && $this->registerHook('header')
			&& $this->registerHook('actionObjectLanguageAddAfter') && Configuration::updateValue('btmenu_iscache', 1)
			&& Configuration::updateValue('btmenu_cachetime', 24))
		{
			$res = true;
			$this->createTables();

			return $res;
		}
		return false;
	}

	private function checkOwnerHooks()
	{
		$hookspos = array(
			'displayTop',
			'displayHeaderRight',
			'displaySlideshow',
			'topNavigation',
			'displayMainmenu',
			'displayPromoteTop',
			'displayRightColumn',
			'displayLeftColumn',
			'displayHome',
			'displayFooter',
			'displayBottom',
			'displayContentBottom',
			'displayFootNav',
			'displayFooterTop',
			'displayFooterBottom'
		);

		foreach ($hookspos as $hook)
		{
			if (!Hook::getIdByName($hook))
			{
				$new_hook = new Hook();
				$new_hook->name = pSQL($hook);
				$new_hook->title = pSQL($hook);
				$new_hook->add();
			}
		}

		return true;
	}

	/**
	 * @see Module::uninstall()
	 */
	public function uninstall()
	{
		if (parent::uninstall())
			return true;
		return false;
	}

	/**
	 * Creates tables
	 */
	protected function createTables()
	{
		$res = 1;
		include_once(dirname(__FILE__).'/install/install.php');
		return $res;
	}

	/**
	 * render content info
	 */
	public function getContent()
	{
		$this->base_config_url = 'index.php?controller=AdminModules&configure='.$this->name.'&token='.Tools::getValue('token');
		$this->_html .= $this->headerHTML();
		$this->_html .= '<h2>'.$this->displayName.'.</h2>';

		/* update tree megamenu positions */
		if (Tools::getValue('doupdatepos') && Tools::isSubmit('updatePosition'))
		{
			$list = Tools::getValue('list');
			$root = 1;
			$child = array();
			foreach ($list as $id => $parent_id)
			{
				if ($parent_id <= 0)
					$parent_id = $root;
				$child[$parent_id][] = $id;
			}
			$res = true;
			foreach ($child as $id_parent => $menus)
			{
				$i = 0;
				foreach ($menus as $id_psmegamenu)
				{
					$res &= Db::getInstance()->execute('
                        UPDATE `'._DB_PREFIX_.'psmegamenu` SET `position` = '.(int)$i.', id_parent = '.(int)$id_parent.' 
                        WHERE `id_psmegamenu` = '.(int)$id_psmegamenu
					);
					$i++;
				}
			}

			$this->clearCache();
			die($this->l('Update Positions Done'));
		}
		/* delete megamenu item */
		if (Tools::getValue('dodel'))
		{
			$obj = new Psbtmegamenu((int)Tools::getValue('id_psmegamenu'));
			$res = $obj->delete();
			$this->clearCache();
			Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
		}
		if (Tools::isSubmit('save'.$this->name) && Tools::isSubmit('active'))
		{
			if ($id_psmegamenu = Tools::getValue('id_psmegamenu'))
				$megamenu = new Psbtmegamenu((int)$id_psmegamenu);
			else
				$megamenu = new Psbtmegamenu();

			$megamenu->copyFromPost();
			$megamenu->id_shop = $this->context->shop->id;

			if ($megamenu->type && $megamenu->type != 'html' && Tools::getValue($megamenu->type.'_type'))
				$megamenu->item = Tools::getValue($megamenu->type.'_type');
			if ($megamenu->validateFields(false) && $megamenu->validateFieldsLang(false))
			{
				$megamenu->save();
				if (isset($_FILES['image']) && isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name']))
				{
					$error = ImageManager::validateUpload($_FILES['image']);
					if ($error)
						return false;
					elseif (!($tmp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['image']['tmp_name'], $tmp_name))
						return false;
					elseif (!ImageManager::resize($tmp_name, _PSMEGAMENU_IMAGE_DIR_.$_FILES['image']['name']))
						return false;
					unlink($tmp_name);
					$megamenu->image = $_FILES['image']['name'];
					$megamenu->save();
				}
				elseif (Tools::getIsset('delete_icon'))
				{
					if ($megamenu->image)
					{
						unlink(_PSMEGAMENU_IMAGE_DIR_.$megamenu->image);
						$megamenu->image = '';
						$megamenu->save();
					}
				}
				$this->clearCache();
				Tools::redirectAdmin(AdminController::$currentIndex.'&configure=psmegamenu&save'.
					$this->name.'&token='.Tools::getValue('token').'&id_psmegamenu='.$megamenu->id);
			}
			else
				$this->_html .= '<div class="conf error alert alert-warning">'.$this->l('An error occurred while attempting to save.').'</div>';
		}

		return $this->displayForm();
	}

	public function hookDisplayHeader()
	{
		$this->context->controller->addCSS($this->_path.'views/css/psmegamenu.css', 'all');
	}

	/**
	 * show megamenu item configuration.
	 */
	protected function showFormSetting()
	{
		// update 1.7 link menu builder
		$link = $this->context->link;
		

		$this->context->controller->addJS(__PS_BASE_URI__.'modules/psmegamenu/views/js/admin/jquery.nestable.js');
		$this->context->controller->addJS(__PS_BASE_URI__.'modules/psmegamenu/views/js/admin/form.js');

		$this->context->controller->addJS(__PS_BASE_URI__.'js/jquery/plugins/jquery.cookie-plugin.js');
		$this->context->controller->addJS(__PS_BASE_URI__.'js/jquery/ui/jquery.ui.tabs.min.js');
		$this->context->controller->addCss(__PS_BASE_URI__.'js/jquery/ui/themes/base/jquery.ui.tabs.css');
		$this->context->controller->addCss(__PS_BASE_URI__.'modules/psmegamenu/views/css/admin/form.css');

		$this->widget->loadEngines();

		$id_lang = $this->context->language->id;
		$id_psmegamenu = (int)Tools::getValue('id_psmegamenu');
		$obj = new Psbtmegamenu($id_psmegamenu);
		$tree = $obj->getTree();
		$categories = PsMegamenuHelper::getCategories();
		$manufacturers = Manufacturer::getManufacturers(false, $id_lang, true);
		$suppliers = Supplier::getSuppliers(false, $id_lang, true);
		$cmss = CMS::listCms($this->context->language->id, false, true);
		$menus = $obj->getDropdown(null, $obj->id_parent);

		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

		$soption = array(
			array(
				'id' => 'active_on',
				'value' => 1,
				'label' => $this->l('Enabled')
			),
			array(
				'id' => 'active_off',
				'value' => 0,
				'label' => $this->l('Disabled')
			)
		);
		$image_url = '';
		if ($obj->image && is_file(_PSMEGAMENU_IMAGE_DIR_.$obj->image))
		{
			$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
			$image_url = Tools::htmlentitiesutf8($protocol.$_SERVER['HTTP_HOST'])._PSMEGAMENU_IMAGE_URL_.$obj->image;
		}

		$menuProfiles = array();
		$types = array(
					array('id' => 'url', 'name' => $this->l('Url')),
					array('id' => 'category', 'name' => $this->l('Category')),
					array('id' => 'product', 'name' => $this->l('Product')),
					array('id' => 'manufacture', 'name' => $this->l('Manufacture')),
					array('id' => 'supplier', 'name' => $this->l('Supplier')),
					array('id' => 'cms', 'name' => $this->l('Cms')),
		);
		// check if pagebuilder module is enabled 
		if ((int)Validate::isLoadedObject($module = Module::getInstanceByName('ptspagebuilder'))
			|| (int)Validate::isLoadedObject($module = Module::getInstanceByName('pspagebuilder'))){

			// update 1.7 - push menu profiles
			$menuProfiles = PsMegamenuHelper::getMenuProfiles();
			if($menuProfiles){
				foreach ($menuProfiles as &$item) {
					$item['name'] = $this->l('Sub Profile: '). Tools::ucfirst( $item['name'] );
				}
			}
			 

			$menuBuilder_url = $link->getAdminLink('AdminPspagebuilderMenu');
		//	$pagebuilder_url = $link->getAdminLink('AdminPspagebuilderMenu');
			//$pagebuilders = PsMegamenuHelper::getPageProfiles();

			
		} 
 

		$menuProfiles = array_merge_recursive( array(array('id_pagebuilderprofile'=>'menu','name'=>'Dropdown-Menu')),  $menuProfiles );
 
		$this->fields_form[0]['form'] = array(
			'legend' => array(
				'title' => $this->l('Create New MegaMenu Item.'),
			),
			'input' => array(
				array(
					'type' => 'hidden',
					'label' => $this->l('Megamenu ID'),
					'name' => 'id_psmegamenu',
					'default' => 0,
				),
				array(
					'type' => 'text',
					'label' => $this->l('Title:'),
					'name' => 'title',
					'value' => true,
					'lang' => true,
					'default' => '',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Sub Title:'),
					'lang' => true,
					'name' => 'text',
					'cols' => 40,
					'rows' => 10,
					'default' => '',
				),
				array(
					'type' => 'select',
					'label' => $this->l('Parent ID'),
					'name' => 'id_parent',
					'options' => array('query' => $menus,
						'id' => 'id',
						'name' => 'title'),
					'default' => 'url',
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Is Active'),
					'name' => 'active',
					'values' => $soption,
					'default' => '1',
				),
				array(
					'type' => 'switch',
					'label' => $this->l('Show Title'),
					'name' => 'show_title',
					'values' => $soption,
					'default' => '1',
				),
				

				array(
					'type' => 'select',
					'label' => $this->l('Menu Type'),
					'name' => 'type',
					'id' => 'menu_type',
					'desc' => $this->l('Select a menu link type and fill data for following input'),
					'options' => array('query' => $types,
						'id' => 'id',
						'name' => 'name'),
					'default' => 'url',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Product ID'),
					'name' => 'product_type',
					'id' => 'product_type',
					'class' => 'menu-type-group',
					'default' => '',
				),
				
				array(
					'type' => 'select',
					'label' => $this->l('CMS Type'),
					'name' => 'cms_type',
					'id' => 'cms_type',
					'options' => array('query' => $cmss,
						'id' => 'id_cms',
						'name' => 'meta_title'),
					'default' => '',
					'class' => 'menu-type-group',
				),

				array(
					'type' => 'text',
					'label' => $this->l('URL'),
					'name' => 'url',
					'id' => 'url_type',
					'class' => 'menu-type-group',
					'default' => '',
				),
				array(
					'type' => 'select',
					'label' => $this->l('Category Type'),
					'name' => 'category_type',
					'id' => 'category_type',
					'options' => array('query' => $categories,
						'id' => 'id_category',
						'name' => 'name'),
					'default' => '',
					'class' => 'menu-type-group',
				),
				array(
					'type' => 'select',
					'label' => $this->l('Manufacture Type'),
					'name' => 'manufacture_type',
					'id' => 'manufacture_type',
					'options' => array('query' => $manufacturers,
						'id' => 'id_manufacturer',
						'name' => 'name'),
					'default' => '',
					'class' => 'menu-type-group',
				),
				array(
					'type' => 'select',
					'label' => $this->l('Supplier Type'),
					'name' => 'supplier_type',
					'id' => 'supplier_type',
					'options' => array('query' => $suppliers,
						'id' => 'id_supplier',
						'name' => 'name'),
					'default' => '',
					'class' => 'menu-type-group',
				),
				
				array(
					'type' => 'select',
					'label' => $this->l('Target Open'),
					'name' => 'target',
					'options' => array('query' => array(
							array('id' => '_self', 'name' => $this->l('Self')),
							array('id' => '_blank', 'name' => $this->l('Blank')),
							array('id' => '_parent', 'name' => $this->l('Parent')),
							array('id' => '_top', 'name' => $this->l('Top'))
						),
						'id' => 'id',
						'name' => 'name'),
					'default' => '_self',
				),
				array(
					'type' => 'text',
					'label' => $this->l('Menu Class'),
					'name' => 'menu_class',
					'display_image' => true,
					'default' => ''
				),
				array(
					'type' => 'text',
					'label' => $this->l('Menu Icon Class'),
					'name' => 'icon_class',
					'display_image' => true,
					'default' => '',
					'desc' => $this->l('The module integrated with Material icons').'.'
					.$this->l('Check list of icons and class name in here')
					.' <a href="https://material.io/icons/" target="_blank">https://material.io/icons/</a> or your icon class'
				),
				array(
					'type' => 'file_pts',
					'label' => $this->l('Or Menu Icon Image'),
					'name' => 'image',
					'display_image' => true,
					'default' => '',
					'image' => $image_url,
					'delete_url' => $this->base_config_url.'&delete_icon=1',
					'title' => $this->l('Icon Preview'),
				),
				// update version 1.7
				array(
					'type' => 'select',
					'label' => '<p  style="color:red;">' . $this->l('Sub Menu Type') . '</p>',
					'name' => 'type_submenu',
					'options' => array('query' => $menuProfiles,
						'id' => 'id_pagebuilderprofile',
						'name' => 'name'),
					'default' => 'menu',
					'desc' => $this->l('Submenu will be showed if select option Menu').'.'
					.' <a href="'.$menuBuilder_url.'" target="_blank">Click here</a> if you want create sub-menu by layout-builder'
				),
				array(
					'type' => 'text',
					'label' => $this->l('Width'),
					'name' => 'submenu_width',
					'default' => '',
					'desc' => $this->l('Enter sub-menu width, such as 940px or 96%. Empty value -> Layout width is used in stylesheet.css of theme')
				),
				array(
					'type' => 'select',
					'label' => $this->l('Alignment Sub-Menu'),
					'name' => 'alignment',
					'options' => array('query' => array(
							array('id' => 'aligned-left', 'name' => $this->l('Align Left')),
							array('id' => 'aligned-right', 'name' => $this->l('Align Right')),
							array('id' => 'aligned-fullwidth', 'name' => $this->l('Justify'))
						),
						'id' => 'id',
						'name' => 'name'),
					'default' => 'aligned-left',
				),
				// end update version 1.7

			),
			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button btn btn-danger'
			)
		);

		$helper = new HelperForm();
		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->identifier = $this->identifier;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		foreach (Language::getLanguages(false) as $lang)
			$helper->languages[] = array(
				'id_lang' => $lang['id_lang'],
				'iso_code' => $lang['iso_code'],
				'name' => $lang['name'],
				'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
			);

		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		$helper->default_form_language = $default_lang;
		$helper->allow_employee_form_lang = $default_lang;
		$helper->toolbar_scroll = true;
		$helper->title = $this->displayName;
		$helper->submit_action = 'save'.$this->name;
		$helper->tpl_vars = array(
			'fields_value' => $this->getConfigFieldsValues($obj),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
		);
		$liveeditor_url = AdminController::$currentIndex.'&configure='.$this->name.'&liveeditor=1&token='.Tools::getAdminTokenLite('AdminModules');

		$action = AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules');
		$helper->toolbar_btn = array(
			'back' => array(
				'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
				'desc' => $this->l('Back to list')
			)
		);


		$html = $this->_html.'<div class="col-lg-12"> <div class="alert alert-info clearfix">
			<div class="pull-right">Using <a target="_blank" href="'.$menuBuilder_url.'" class="btn btn-danger"> 
			'.$this->l('Sub-Menu Buider Layout Editor').'</a> '.$this->l('To Make Rich Content For Megamenu').'</div></div></div>';

		$output = $html.'
                 <ul class="nav nav-tabs clearfix" id="myTab">
                  <li class="active"><a href="#megamenu" data-toggle="tab">'.$this->l('Megamenu').'</a></li>
                </ul>
 
            <div class="tab-content clearfix">
              <div class="tab-pane active" id="megamenu">
        ';
		$addnew = AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules').
				'&configure='.$this->name.'&tab_module=front_office_features&module_name='.$this->name;
		$output .= '<div class="col-md-4"><div class="panel panel-default"><h3 class="panel-title">'.$this->l('Tree Megamenu Management').'</h3>
					<div class="panel-content"><div class="alert alert-warning">'.$this->l('To sort orders or update parent-child, you drap and drop expected menu, 
						then click to Update button to Save').'</div>
					<hr>
					<p>
                    <div class="pull-right">
                    <input type="button" value="'.$this->l('New Category').'" id="addcategory" 
                    	data-loading-text="'.$this->l('Processing ...').'" class="btn btn-default " name="addcategory">
                     <a href="'.$liveeditor_url.'" class="btn btn-danger"> '.$this->l('Editor').'</a> </div>
                    <input type="button" value="'.$this->l('Update Positions').'" id="serialize" data-loading-text="'.$this->l('Processing ...').'" 
                    	class="btn btn-primary" name="serialize"></p><hr>'.$tree.'<p><input type="button" value="'.$this->l('Update Positions').'" 
                    	id="serialize-tree" data-loading-text="'.$this->l('Processing ...').'" 
                    	class="btn btn-primary" name="serialize"></p></div></div></div>
                    <div class="col-md-8">'.$helper->generateForm($this->fields_form).'</div>
                    <script type="text/javascript">var addnew ="'.$addnew.'"; var action="'.$action.'";
                    	$("#content").PavMegaMenuList({action:action,addnew:addnew});</script>';
		$output .= '</div>';

		return $output;
	}

	/**
	 * Asign value for each input of Data form
	 */
	public function getConfigFieldsValues($obj)
	{
		$languages = Language::getLanguages(false);
		$fields_values = array();

		foreach ($this->fields_form as $k => $f)
		{
			foreach ($f['form']['input'] as $j => $input)
			{
				if (isset($obj->{trim($input['name'])}))
				{
					$data = $obj->{trim($input['name'])};
					if ($input['name'] == 'image' && $data)
					{
						$thumb = __PS_BASE_URI__.'modules/'.$this->name.'/img/'.$data;
						$this->fields_form[$k]['form']['input'][$j]['thumb'] = $thumb;
					}
					if (isset($input['lang']))
						foreach ($languages as $lang)
							$fields_values[$input['name']][$lang['id_lang']] = isset($data[$lang['id_lang']]) ? $data[$lang['id_lang']] : $input['default'];
					else
						$fields_values[$input['name']] = isset($data) ? $data : $input['default'];
				}
				else
				{
					if (isset($input['lang']))
					{
						foreach ($languages as $lang)
						{
							$v = Tools::getValue('title', Configuration::get($input['name'], $lang['id_lang']));
							$fields_values[$input['name']][$lang['id_lang']] = $v ? $v : $input['default'];
						}
					}
					else
					{
						$v = Tools::getValue($input['name'], Configuration::get($input['name']));
						$fields_values[$input['name']] = $v ? $v : $input['default'];
					}
					if ($input['name'] == $obj->type.'_type')
						$fields_values[$input['name']] = $obj->item;
				}
			}
		}

		return $fields_values;
	}

	// update 1.7 get widget content
	public function buildLayoutData($rows, $ws, $profile, $rl = 1)
	{
		$layout = array();
		$mcrypt = new PhpEncryptionLegacyEngineCore(_PAGEBUILDER_MCRYPT_KEY_);
		
		$module = new PsMegaMenu();
		$context = Context::getContext();

		foreach ($rows as $rkey => $row)
		{
			$row->level = $rl;
			$row = PsPagebuilderHelper::mergeRowData($row);

			foreach ($row->cols as $ckey => $col)
			{
				$col = PsPagebuilderHelper::mergeColData($col);
				foreach ($col->widgets as $wkey => $w)
				{
					$w->wkey = (string)$w->wkey;
					if ($w && isset($w->wkey) && isset($ws[$w->wkey]))
					{
						$content = trim($ws[$w->wkey]['config']);
						if ($content)
						{
							$widget = unserialize(PsPagebuilderHelper::clearUnexpected($content));
							if (isset($widget['widget']))
							{
								foreach ($widget['widget'] as $k => $v)
									$widget['widget'][$k] = $mcrypt->decrypt($v);

								if (isset($widget['widget']['wtype']))
								{
									$type = $widget['widget']['wtype'];
									$profile->loadWidgetObject($type, $context->controller);
									$tmp = $profile->getWidgetContent($type, $widget['widget'], 'psmegamenu');

									$col->widgets[$wkey]->content = $this->getWidgetContent($w->wkey, $tmp['type'], $tmp['data']);
								}
							}
						}
					}
				}
				if (isset($col->rows))
					$col->rows = $this->buildLayoutData($col->rows, $ws, $profile, $rl + 1);
				$row->cols[$ckey] = $col;
			}

			$layout[$rkey] = $row;
		}

		return $layout;
	}
	public function getWidgetMenuContent($dir, $layout)
	{
		$output = '';

		$this->smarty->assign(array(
			'layout' => $layout,
			'layout_tpl' => $dir,
			'prefix' => 'menubuilder',
		));

		$output .= html_entity_decode(html_entity_decode($this->display(__FILE__, 'pspagebuilder.tpl'), ENT_QUOTES, "UTF-8"));

		return $output;
	}
	// end update 1.7


	/**
	 * getWidgetContent for megamenu-builder 
	 */
	public function getWidgetContent($id, $type, $data)
	{
		$output = '';
		if ($type) {

			$data['id_lang'] = $this->context->language->id;

			$this->smarty->assign($data);
			$output = '<div class="pts-widget" id="wid-'.$id.'-'.rand().'">';
			$output .= $this->display(__FILE__, 'views/templates/front/widgets/widget_'.$type.'.tpl');
			$output .= '</div>';
		}
		return $output;
	}

	/**
	 * Display form view in admin page
	 */
	private function displayForm()
	{
		return $this->showFormSetting();
	}


	/**
	 * Hook Display 
	 */
	public function hookDisplayHeaderRight()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplaySlideshow()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplayMainmenu()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplayTopNavigation()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplayPromoteTop()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplayBottom()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplayContentBottom()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplayRightColumn()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplayLeftColumn()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplayHome()
	{
		return $this->hookDisplayTop();
	}

	public function hookDisplayFooter()
	{
		return $this->hookDisplayTop();
	}
	/**
	 * Display Bootstrap MegaMenu
	 */
	public function hookDisplayTop()
	{
		$cache_id = $this->getCacheId();
		$tpl = 'megamenu.tpl';

		if (!$this->isCached( $tpl , $cache_id))
		{
			$params = array();
			$params['params'] = Configuration::get('PS_MEGAMENU_PARAMS');

			if (isset($params['params']) && !empty($params['params']))
				$params['params'] = Tools::jsonDecode($params['params']);
			$obj = new Psbtmegamenu();
			$obj->setModule($this);

			$psmegamenu = $obj->getFrontTree(1, false, $params['params']);

			$this->smarty->assign('psmegamenu', $psmegamenu);
		}

		return html_entity_decode($this->display(__FILE__, $tpl, $cache_id));
	}

	public function hookActionObjectLanguageAddAfter($params)
	{
		$id_lang_default = Configuration::get('PS_LANG_DEFAULT');
		$id_lang_current = $params['object']->id;
		$obj = new PsMegamenuWidget();
		$widgets = $obj->getWidgets();

		if ($widgets)
		{
			foreach ($widgets as $value) 
			{
				$param = unserialize($value['params']);
				if ($param)
				{
					foreach ($param as $k => $p)
					{
						$arrs = explode('_', $k);
						$end = end($arrs);
						array_pop($arrs);
						if ($end == $id_lang_default)
							$param[implode('_', $arrs).'_'.$id_lang_current] = $p;
					}
					$post = array(
						'id' => $value['id_widget'],
						'params' => $param,
						'type' => $value['type'],
						'name' => $value['name'],
					);
					$obj->saveData($post);
				}
			}
		}
	}

	protected function getCacheId($name = null, $hook = '')
	{
		$cache_array = array(
			$name !== null ? $name : $this->name,
			$hook,
			date('Ymd'),
			(int)Tools::usingSecureMode(),
			(int)$this->context->shop->id,
			(int)Group::getCurrent()->id,
			(int)$this->context->language->id,
			(int)$this->context->currency->id,
			(int)$this->context->country->id,
			(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
		);
		return implode('|', $cache_array);
	}

	public function clearBLHLCache()
	{
		$this->_clearCache('*');
	}

	public function clearCache()
	{
		$this->clearBLHLCache();
	}

	/**
	 *
	 */
	public function headerHTML()
	{
		if (Tools::getValue('controller') != 'AdminModules' && Tools::getValue('configure') != $this->name)
			return;
		$this->context->controller->addJqueryUI('ui.sortable');
		return '';
	}

}
