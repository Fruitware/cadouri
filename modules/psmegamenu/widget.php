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

include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once(dirname(__FILE__).'/psmegamenu.php');

if (Tools::getValue('showlist'))
{
	$module = new PsMegaMenu();
	$model = $module->widget;
	$widgets = $model->getWidgets();
	$model->loadEngines();

	$str = '<option value=""></option>';
	foreach ($widgets as $w)
	{
		$more = '';
		if ($info = $model->getWidgetInfo($w['type']))
			$more = '('.$info['label'].')';
		$str .= '<option value="'.$w['key_widget'].'">'.$more.'  '.$w['name'].'</option>';
	}
	echo $str;
}
else
{
	$context = Context::getContext();
	$module = new PsMegaMenu();
	echo $module->renderWidgetButton();
}
die;
