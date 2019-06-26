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

$path = dirname(_PS_ADMIN_DIR_);
include_once($path.'/config/config.inc.php');
include_once($path.'/init.php');
$res = (bool)Db::getInstance()->execute('
	CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'psmegamenu` (
	  `id_psmegamenu` int(11) NOT NULL AUTO_INCREMENT,
	  `image` varchar(255) NOT NULL,
	  `id_parent` int(11) NOT NULL,
	  `is_group` tinyint(1) NOT NULL,
	  `width` varchar(255) DEFAULT NULL,
	  `submenu_width` varchar(255) DEFAULT NULL,

	  `alignment` varchar(255) DEFAULT NULL,
	  
	  `colum_width` varchar(255) DEFAULT NULL,
	  `submenu_colum_width` varchar(255) DEFAULT NULL,
	  `item` varchar(255) DEFAULT NULL,
	  `colums` varchar(255) DEFAULT NULL,
	  `type` varchar(255) NOT NULL,
	  `is_content` tinyint(1) NOT NULL,
	  `show_title` tinyint(1) NOT NULL,
	  `type_submenu` varchar(10) NOT NULL,
	  `level_depth` smallint(6) NOT NULL,
	  `active` tinyint(1) NOT NULL,
	  `position` int(11) NOT NULL,
	  `submenu_content` text NOT NULL,
	  `show_sub` tinyint(1) NOT NULL,
	  `url` varchar(255) DEFAULT NULL,
	  `target` varchar(25) DEFAULT NULL,
	  `privacy` smallint(6) DEFAULT NULL,
	  `position_type` varchar(25) DEFAULT NULL,
	  `menu_class` varchar(25) DEFAULT NULL,
	  `content` text,
	  `icon_class` varchar(255) DEFAULT NULL,
	  `level` int(11) NOT NULL,
	  `left` int(11) NOT NULL,
	  `right` int(11) NOT NULL,
	  `submenu_catids` text,
	  `is_cattree` tinyint(1) DEFAULT \'1\',
	  `date_add` datetime DEFAULT NULL,
	  `date_upd` datetime DEFAULT NULL,
	  PRIMARY KEY (`id_psmegamenu`)
	) ENGINE='._MYSQL_ENGINE_.' AUTO_INCREMENT=2  DEFAULT CHARSET=utf8;
');
$res &= (bool)Db::getInstance()->execute('
	CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'psmegamenu_lang` (
	  `id_psmegamenu` int(11) NOT NULL,
	  `id_lang` int(11) NOT NULL,
	  `title` varchar(255) DEFAULT NULL,
          `text` varchar(255) DEFAULT NULL,
	  `description` text,
	  `content_text` text,
	  `submenu_content_text` text,
	  PRIMARY KEY (`id_psmegamenu`,`id_lang`)
	) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;
');

$res &= (bool)Db::getInstance()->execute('
CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'psmegamenu_widgets` (
  `id_widget` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` varchar(255) NOT NULL,
  `params` text NOT NULL,
  `id_shop` int(11) NOT NULL,
  `key_widget` int(11) NOT NULL,
  PRIMARY KEY (`id_widget`, `id_shop`)
) ENGINE='._MYSQL_ENGINE_.'  DEFAULT CHARSET=utf8;
');

$res &= (bool)Db::getInstance()->execute('
	CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'psmegamenu_shop` (
	  `id_psmegamenu` int(11) NOT NULL DEFAULT \'0\',
	  `id_shop` int(11) NOT NULL DEFAULT \'0\',
	  PRIMARY KEY (`id_psmegamenu`,`id_shop`)
	) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;
');

/* install sample data */
// $rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT id_psmegamenu FROM `'._DB_PREFIX_.'psmegamenu`');
// if (count($rows) == 0 && file_exists(_PS_MODULE_DIR_.'psmegamenu/install/sample.php'))
// 	include_once(_PS_MODULE_DIR_.'psmegamenu/install/sample.php');
/* END REQUIRED */

