{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   psmegamenu
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2017 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if isset($products) && !empty($products)}
<div class="widget widget widget-products {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if} block">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</h4>
	{/if}
	<div class="widget-inner block_content">
		{if isset($products) AND $products}
	 		{$tabname=rand()+count($products)}
			{include file="{$items_normal_tpl}" items=$products class="products-block list_{$list_type} list"}
		{/if}
	</div>
</div>
{/if}