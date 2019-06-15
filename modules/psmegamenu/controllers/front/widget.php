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

class PsMegaMenuWidgetModuleFrontController extends ModuleFrontController
{
	public $php_self;
	public function init()
	{
		parent::init();
		require_once($this->module->getLocalPath().'psmegamenu.php');
	}

	public function initContent()
	{
		$this->php_self = 'widget';
		parent::initContent();

		$module = new PsMegaMenu();
		echo $module->renderwidget();
		die;
	}
}