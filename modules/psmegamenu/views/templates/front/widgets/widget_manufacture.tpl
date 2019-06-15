{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   psmegamenu
* @version   2.5
* @author    http://www.prestabrain.com
* @copyright Copyright (C) November 2016 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
<div class="widget-manufacture block">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget-heading title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</div>
	{/if}
	<div class="widget-inner block_content">
		<div class="manu-logo">
			{foreach from=$manufacturers item=manufacturer name=manufacturers}
			<a  href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}"  title="{l s='view products' mod='psmegamenu'}">
			<img src="{$img_manu_dir|escape:'html':'UTF-8'}{$manufacturer.image|escape:'htmlall':'UTF-8'}-medium_default.jpg" alt=""/> </a>
			{/foreach}
		</div>
	</div>
</div>
 