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

(bool)Db::getInstance()->execute('
	INSERT INTO `'._DB_PREFIX_.'psmegamenu` (`id_psmegamenu`, `image`, `id_parent`, `is_group`, `width`, `submenu_width`, 
		`colum_width`, `submenu_colum_width`, `item`, `colums`, `type`, `is_content`, `show_title`, `type_submenu`, 
		`level_depth`, `active`, `position`, `submenu_content`, `show_sub`, `url`, `target`, `privacy`, `position_type`, 
		`menu_class`, `content`, `icon_class`, `level`, `left`, `right`, `submenu_catids`, `is_cattree`, `date_add`, `date_upd`) VALUES
	(1, \'\', 0, 0, \'\', \'\', \'\', \'\', \'3\', \'1\', \'category\', 0, 1, \'menu\', 1, 1, 0, \'\', 
		0, \'\', \'_self\', 0, \'\', \'\', \'\', \'\', 0, 0, 0, \'\', 1, \'2015-08-12 23:03:48\', \'2015-08-12 23:03:48\');
');

(bool)Db::getInstance()->execute('
	INSERT INTO `'._DB_PREFIX_.'psmegamenu_lang` (`id_psmegamenu`, `id_lang`, `title`, 
		`text`, `description`, `content_text`, `submenu_content_text`) VALUES
	(1, 1, \'Root\', \'\', \'\', \'\', \'\');
');

(bool)Db::getInstance()->execute('
	INSERT INTO `'._DB_PREFIX_.'psmegamenu_shop` (`id_psmegamenu`, `id_shop`) VALUES
	(1, 1);
');