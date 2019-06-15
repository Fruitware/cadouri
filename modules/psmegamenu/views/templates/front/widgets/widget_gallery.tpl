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
{if isset($images)}
{if isset($columns)}
	{if $columns == 5}
		{assign var='nbItemsPerLine' value=$columns} 
	{else}
		{assign var='nbItemsPerLine' value=12/$columns}
	{/if}
{else}
	{assign var='columns' value=4}
	{assign var='nbItemsPerLine' value=4}
{/if}
{if isset($nbr_desktops)}
	{if $nbr_desktops == 5}
		{assign var='nbItemsPerLineDesktop' value=$nbr_desktops} 
	{else}
		{assign var='nbItemsPerLineDesktop' value=12/$nbr_desktops}
	{/if}
{else}
	{assign var='nbItemsPerLineDesktop' value=4}
{/if}
{if isset($nbr_tablets)}
	{assign var='nbItemsPerLineTablet' value=12/$nbr_tablets}
{else}
	{assign var='nbItemsPerLineTablet' value=3}
{/if}
{if isset($nbr_mobile)}
	{assign var='nbItemsPerLineMobile' value=12/$nbr_mobile}
{else}
	{assign var='nbItemsPerLineMobile' value=2}
{/if}
	<div class="widget-images block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
		{if isset($widget_heading)&&!empty($widget_heading)}
		<h4 class="title_block">
			{$widget_heading|escape:'html':'UTF-8'}
		</h4>
		{/if}
		<div class="widget-inner block_content clearfix">
			{if $display_mode=='carousel'}
				<div class="widget-content owl-carousel-play" data-ride="owlcarousel">
				 	{if count($images) > $columns}
					 	<div class="carousel-controls">
						 	<a class="left carousel-control left_carousel" href="#">&lsaquo;</a>
							<a class="right carousel-control right_carousel" href="#">&rsaquo;</a>
						</div>
					{/if}
					<div class="owl-carousel {if isset($list_mode) && $list_mode}{$list_mode|escape:'html':'UTF-8'}{/if}" data-columns="{$columns|escape:'html':'UTF-8'}" data-pagination="false" data-navigation="true"
						{if isset($nbr_desktops)}data-desktop="[1200,{$nbr_desktops|escape:'html':'UTF-8'}]"{/if}
						{if isset($nbr_tablets)}data-desktopsmall="[992,{$nbr_tablets|escape:'html':'UTF-8'}]"{/if}
						{if isset($nbr_mobile)}data-tablet="[768,{$nbr_mobile|escape:'html':'UTF-8'}]"{/if}
						data-mobile="[480,1]">
						{foreach from=$images item=image name=image}	
							<div class="item">
								{if $image.link}
			 						<a href="{$image.link|escape:'html':'UTF-8'}" title="{l s='Image Gallery' mod='pspagebuilder'}"><img src="{$image.thumbnailurl|escape:'html':'UTF-8'}"/></a>
			 					{else}
			 						<img src="{$image.thumbnailurl|escape:'html':'UTF-8'}"/>
			 					{/if}
							</div>
						{/foreach}
					</div>
				</div>
			{else}
				<div class="images-list row owl-wrapper flex-container clearfix">	
			 		{foreach from=$images item=image name=image}
				 		<div class="owl-item col-lg-{if $nbItemsPerLine==5}cus-{/if}{$nbItemsPerLine|escape:'html':'UTF-8'} col-md-{if $nbItemsPerLineDesktop==5}cus-{/if}{$nbItemsPerLineDesktop|escape:'html':'UTF-8'} col-sm-{$nbItemsPerLineTablet|escape:'html':'UTF-8'} col-xs-{$nbItemsPerLineMobile|escape:'html':'UTF-8'} col-xs-cus-12 {if $smarty.foreach.items_name.iteration%(12/$nbItemsPerLine) == 1} first-in-line{/if}{if $smarty.foreach.items_name.iteration%(12/$nbItemsPerLineTablet) == 1} first-item-of-tablet-line{/if} {if $smarty.foreach.items_name.iteration%(12/$nbItemsPerLineMobile) == 1} first-item-of-mobile-line{/if} ">
							<div class="item">
								<img src="{$image.thumbnailurl|escape:'html':'UTF-8'}"/>			 			
					 			{if $ispopup}
							 		<a href="{$image.imageurl|escape:'htmlall':'UTF-8'}" class="pts-popup fancybox" title="{l s='Large Image' mod='pspagebuilder'}"><span class="icon icon-expand"></span></a>
							 	{/if}
							 	
							 	{if $image.link}
							 		<a href="{$image.link|escape:'htmlall':'UTF-8'}" class="pts-btnlink" title="{l s='Large Image' mod='pspagebuilder'}"><span class="icon icon-share"></span></a>
							 	{/if}
							</div>
						</div>
					{/foreach}
				</div>	
		 	{/if}	
		</div>
	</div>
{/if} 