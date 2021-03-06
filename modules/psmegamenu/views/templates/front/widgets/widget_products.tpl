{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   pspagebuilder
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) November 2016 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if isset($products) && !empty($products)}
<div class="widget widget-products {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if} block">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		{$widget_heading|escape:'html':'UTF-8'}
		{if isset($description) && $description}
			{$description}{* HTML, cannot escape *}
		{/if}
		{if isset($banner_imagefile) && $banner_imagefile && $bannerurl}
			<img src="{$bannerurl|escape:'html':'UTF-8'}" alt="{if isset($widget_heading)&&!empty($widget_heading)}{$widget_heading|escape:'html':'UTF-8'}{else}banner{/if}">
		{/if}
	</h4>
	{/if}
	<div class="widget-inner block_content">
		{if isset($products) AND $products}
	 		{$tabname=rand()+count($products)}
			{if isset($display_mode) && $display_mode == 'carousel'}
				{include file="{$items_owl_carousel_tpl}" items=$products}
			{else}
				{include file="{$items_normal_tpl}" items=$products}
			{/if}
		{/if}
	</div>
</div>
{/if}