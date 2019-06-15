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

define('_PSMEGAMENU_IMAGE_DIR_', _PS_MODULE_DIR_.'psmegamenu/views/img/');
define('_PSMEGAMENU_IMAGE_URL_', _MODULE_DIR_.'psmegamenu/views/img/');

define('_PSMEGAMENU_MCRYPT_KEY_', md5('key_psmegamenu'));
define('_PSMEGAMENU_MCRYPT_IV_', md5('iv_psmegamenu'));

if (!is_dir(_PSMEGAMENU_IMAGE_DIR_))
	mkdir(_PSMEGAMENU_IMAGE_DIR_, 0777);

include_once(_PS_MODULE_DIR_.'psmegamenu/classes/psmenurijndael.php');
include_once(_PS_MODULE_DIR_.'psmegamenu/classes/mcrypt.php');
include_once(_PS_MODULE_DIR_.'psmegamenu/classes/Psbtmegamenu.php');
include_once(_PS_MODULE_DIR_.'psmegamenu/libs/Helper.php');
require_once(_PS_MODULE_DIR_.'psmegamenu/classes/widgetbase.php');
require_once(_PS_MODULE_DIR_.'psmegamenu/classes/widget.php');
