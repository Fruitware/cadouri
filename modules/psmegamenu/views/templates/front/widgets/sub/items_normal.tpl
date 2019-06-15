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
{if isset($columns)}
	{assign var='nbItemsPerLine' value=12/$columns}
{else}
	{assign var='columns' value=4}
	{assign var='nbItemsPerLine' value=4}
{/if}
{if isset($nbr_desktops)}
	{assign var='nbItemsPerLineDesktop' value=12/$nbr_desktops}
{else}
	{assign var='nbItemsPerLineDesktop' value=4}
{/if}
{if isset($nbr_tablets)}
	{assign var='nbItemsPerLineTablet' value=12/$nbr_tablets}
{else}
	{assign var='nbItemsPerLineTablet' value=2}
{/if}
{if isset($nbr_mobile)}
	{assign var='nbItemsPerLineMobile' value=12/$nbr_mobile}
{else}
	{assign var='nbItemsPerLineMobile' value=1}
{/if}
<div id="{$tabname|escape:'html':'UTF-8'}" class="product_list products-block">
	{$mitems = array_chunk($items, $columns)}
	{foreach from=$mitems item=titems name=mitems_name}
		<div class="row">
			{foreach from=$titems item=item name=items_name}
				<div class="ajax_block_product col-lg-{$nbItemsPerLine|escape:'html':'UTF-8'} col-md-{$nbItemsPerLineDesktop|escape:'html':'UTF-8'} 
				col-sm-{$nbItemsPerLineTablet|escape:'html':'UTF-8'} col-xs-{$nbItemsPerLineMobile|escape:'html':'UTF-8'}">
					{include file="{$list_mode_tpl}" product=$item}
				</div>
			{/foreach}
		</div>		
	{/foreach}
</div>
 