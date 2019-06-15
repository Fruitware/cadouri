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
{if isset($product)}
<div class="widget-product block">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget-heading title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</div>
	{/if}
	<div class="widget-inner block_content">
		<div class="product_block">
 			 
 			 <div class="product-container clearfix">	
				
				<div class="image ">
					<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:html:'UTF-8'}" class="product_image">
						<img class="img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'htmlall':'UTF-8'}"  alt="{$product.name|escape:html:'UTF-8'}" />
						{if isset($product.new) && $product.new == 1}<span class="new">{l s='New' mod='psmegamenu'}</span>{/if}
					</a>
				</div>
				
				<div class="product-meta">
					<h3 class="name"><a href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|truncate:150:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h5>
					 
			 		<div class="description">{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'|escape:'htmlall':'UTF-8'}</div>
					{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
					
					 
			   </div>
			</div>
		</div>	
	</div>
</div>
{/if} 