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

class PsMegamenuHelper {


	//update version 1.7
	public static function getMenuProfiles(){
		
		$context = Context::getContext();
		$id_shop = $context->shop->id;

		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT  p.id_pagebuilderprofile, p.name 
			FROM '._DB_PREFIX_.'pagebuilderprofile  p
			LEFT JOIN '._DB_PREFIX_.'pagebuilderprofile_shop ps ON (p.id_pagebuilderprofile = ps.id_pagebuilderprofile)
			WHERE id_shop = '.(int)$id_shop.' AND is_menu=1
		');
	}

	public static function getPageProfiles(){
		
		$context = Context::getContext();
		$id_shop = $context->shop->id;

		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT  p.id_pagebuilderprofile, p.name 
			FROM '._DB_PREFIX_.'pagebuilderprofile  p
			LEFT JOIN '._DB_PREFIX_.'pagebuilderprofile_shop ps ON (p.id_pagebuilderprofile = ps.id_pagebuilderprofile)
			WHERE id_shop = '.(int)$id_shop.' AND is_menu=0 AND is_footer = 0
		');
	}
	
	public static function getCategories(){
		$children  = self::getIndexedCategories();
        $list = array();
		self::treeCategory(1, $list , $children);       
        return $list;
	}
	
	public static function treeCategory($id, &$list, $children, $tree=''){		
		if (isset($children[$id])){
			if ($id != 0){
				$tree = $tree." - ";
			}
			foreach ($children[$id] as $v) {
				$v["tree"] = $tree;
				$list[] = $v;
				self::treeCategory($v['id_category'], $list, $children,$tree);
			}
		}
	}
	
	public static function getIndexedCategories(){
		global $cookie;
		$id_lang = intval($cookie->id_lang);
		
		$join = 'JOIN `'._DB_PREFIX_.'category_shop` cs ON(c.`id_category` = cs.`id_category` AND cs.`id_shop` = '.(int)(Context::getContext()->shop->id).')';
		
		$allCat = Db::getInstance()->ExecuteS('
		SELECT c.*, cl.id_lang, cl.name, cl.description, cl.link_rewrite, cl.meta_title, cl.meta_keywords, cl.meta_description
		FROM `'._DB_PREFIX_.'category` c
		'.$join.'
		LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (c.`id_category` = cl.`id_category` AND `id_lang` = '.intval($id_lang).')
		LEFT JOIN `'._DB_PREFIX_.'category_group` cg ON (cg.`id_category` = c.`id_category`)
		WHERE `active` = 1 
		GROUP BY c.`id_category`
		ORDER BY `id_category` ASC');
		$children = array();
		if ($allCat)
		{
			foreach ($allCat as $v)
			{
				$pt 	= $v['id_parent'];
				$list 	= @$children[$pt] ? $children[$pt] : array();
				array_push($list, $v);
				$children[$pt] = $list;
			}
			return $children;
		}
		return array();
	}
	
	public static function getFieldValue($obj, $key, $id_lang = NULL, $id_shop = null)
	{
		if (!$id_shop && $obj->isLangMultishop())
			$id_shop = Context::getContext()->shop->id;

		if ($id_lang)
			$defaultValue = ($obj->id && isset($obj->{$key}[$id_lang])) ? $obj->{$key}[$id_lang] : '';
		else
			$defaultValue = isset($obj->{$key}) ? $obj->{$key} : '';

		return Tools::getValue($key.($id_lang ? '_'.$id_shop.'_'.$id_lang : ''), $defaultValue);
	}
	
	
}
