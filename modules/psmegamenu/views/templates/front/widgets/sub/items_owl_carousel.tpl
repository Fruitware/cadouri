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
<div class="widget-content owl-carousel-play" data-ride="owlcarousel">
 	{if count($items) > $columns}
	 	<div class="carousel-controls">
		 	<a class="left carousel-control left_carousel" href="#">&lsaquo;</a>
			<a class="right carousel-control right_carousel" href="#">&rsaquo;</a>
		</div>
	{/if}
	<div class="owl-carousel product_list products-block {if isset($list_mode) && $list_mode}{$list_mode|escape:'html':'UTF-8'}{/if}" data-columns="{$columns|escape:'html':'UTF-8'}" data-pagination="false" data-navigation="true"
		{if isset($nbr_desktops)}data-desktop="[1200,{$nbr_desktops|escape:'html':'UTF-8'}]"{/if}
		{if isset($nbr_tablets)}data-desktopsmall="[992,{$nbr_tablets|escape:'html':'UTF-8'}]"{/if}
		{if isset($nbr_mobile)}data-tablet="[768,{$nbr_mobile|escape:'html':'UTF-8'}]"{/if}
		data-mobile="[480,1]">
	{foreach from=$items item=item name=item_name}
		<div class="item ajax_block_product">
			{include file="{$list_mode_tpl}" product=$item}
		</div>
	{/foreach}
	</div>
</div>