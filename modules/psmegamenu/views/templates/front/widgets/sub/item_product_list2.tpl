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
<div class="product-block" itemscope="" itemtype="http://schema.org/Product">
	<div class="product-container">
		<span class="nb-item">{$smarty.foreach.products.iteration|escape:'html':'UTF-8'}</span>
		<div class="product-image-container image">
			<a class="img product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
				<img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" {if isset($homeSize)} width="{$homeSize.width|escape:'html':'UTF-8'}" height="{$homeSize.height|escape:'html':'UTF-8'}"{/if} itemprop="image" />
			</a>
			{if isset($product.new) && $product.new == 1}
				<span class="product-label new-box">
					<span class="new-label">{l s='New' mod='pspagebuilder'}</span>
				</span>
			{/if}
			{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
				<span class="product-label  sale-box">
					<span class="sale-label">{l s='Sale!' mod='pspagebuilder'}</span>
				</span>
			{/if}
			<div class="right">
				<div class="action">
					<div class="product-zoom">
						<a class="btn-tooltip pts-fancybox btn btn-highlighted cboxElement" href="{$link->getImageLink($product.link_rewrite, $product.id_image, 'large_default')|escape:'html':'UTF-8'}" rel="nofollow" data-toggle="tooltip" title="{l s='zoom' mod='pspagebuilder'}">
							<i class="icon-search-plus"></i>
							<span>{l s='zoom' mod='pspagebuilder'}</span>
						</a>
					</div>	
					
					{hook h='displayProductListFunctionalButtons' product=$product}
					
					{if isset($comparator_max_item) && $comparator_max_item}
						<div class="compare"><a class="btn-tooltip btn btn-highlighted add_to_compare" href="{$product.link|escape:'html':'UTF-8'}" data-id-product="{$product.id_product|escape:'html':'UTF-8'}" data-toggle="tooltip" title="{l s='Compare' mod='pspagebuilder'}">
							<i class="icon icon-retweet"></i><span>{l s='Compare' mod='pspagebuilder'}</span></a>
						</div>
					{/if}
				</div>
			</div>

			{if isset($product.js)}
				<div class="pts-countdown-{$product.id_product|escape:'html':'UTF-8'} item-countdown">
	                {if $product.js == 'unlimited'}<div class="labelexpired">{l s='Unlimited' mod='pspagebuilder'}</div>{/if}
	            </div>
	            {if $product.js != 'unlimited'}	
	                <script type="text/javascript">
	                    {literal}
	                    jQuery(document).ready(function($) {{/literal}
	                        $(".pts-countdown-{$product.id_product|escape:'html':'UTF-8'}").lofCountDown({literal}{{/literal}
	                            TargetDate:"{$product.js.month|escape:'html':'UTF-8'}/{$product.js.day|escape:'html':'UTF-8'}/{$product.js.year|escape:'html':'UTF-8'} {$product.js.hour|escape:'html':'UTF-8'}:{$product.js.minute|escape:'html':'UTF-8'}:{$product.js.seconds|escape:'html':'UTF-8'}",
	                            DisplayFormat:"<ul><li><div class=\"countdown_num\">%%D%% </div><div>{l s='Days' mod='pspagebuilder'}</div></li><li><div class=\"countdown_num\">%%H%% </div><div>{l s='Hours' mod='pspagebuilder'}</div></li><li><div class=\"countdown_num\">%%M%%</div> <div>{l s='Minutes' mod='pspagebuilder'}</div></li><li><div class=\"countdown_num\">%%S%%</div><div> {l s='Seconds' mod='pspagebuilder'}</div></li></ul>",
	                            FinishMessage: "{$product.finish|escape:'html':'UTF-8'}"
	                        {literal}
	                        });
	                    });
	                    {/literal}
	                </script>
	            {/if}
            {/if}
		</div>
		<div class="product-meta">		
			<div class="left">
				<h3 class="name" itemprop="name">
					{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
					<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
						{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
					</a>
				</h3>
				<div class="product-desc description" itemprop="description">
					{$product.description_short|strip_tags:'UTF-8'|truncate:200:'...'|escape:'html':'UTF-8'}
				</div>
				{hook h='displayProductListReviews' product=$product}
				{if isset($product.color_list)}
					<div class="color-list-container product-colors">{$product.color_list} {* HTML, cannot escape *}</div>
				{/if}
				<div class="product-flags">
					{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
						{if isset($product.online_only) && $product.online_only}
							<span class="online_only">{l s='Online only' mod='pspagebuilder'}</span>
						{/if}
					{/if}
					{if isset($product.reduction) && $product.reduction && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
						<span class="discount">{l s='Reduced price!' mod='pspagebuilder'}</span>
					{/if}
				</div>
				{if (!$PS_CATALOG_MODE && $PS_STOCK_MANAGEMENT && ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
					{if isset($product.available_for_order) && $product.available_for_order && !isset($restricted_country_mode)}
						<span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="availability">
							{if ($product.allow_oosp || $product.quantity > 0)}
								<span class="{if $product.quantity <= 0}out-of-stock{else}available-now{/if}">
									<link itemprop="availability" href="http://schema.org/InStock" />
									{if $product.quantity <= 0}
										{if $product.allow_oosp}
											{$product.available_later|escape:'html':'UTF-8'}
										{else}
											{l s='Out of stock' mod='pspagebuilder'}
										{/if}
									{else}
									{if isset($product.available_now) && $product.available_now}{$product.available_now}{else}{l s='In Stock' mod='pspagebuilder'}{/if}{/if}
								</span>
							{elseif (isset($product.quantity_all_versions) && $product.quantity_all_versions > 0)}
								<span class="available-dif">
									<link itemprop="availability" href="http://schema.org/LimitedAvailability" />{l s='Product available with different options' mod='pspagebuilder'}
								</span>
							{else}
								<span class="out-of-stock">
									<link itemprop="availability" href="http://schema.org/OutOfStock" />{l s='Out of stock' mod='pspagebuilder'}
								</span>
							{/if}
						</span>
					{/if}
				{/if}
				
				<div class="bottom">					
					<div class="wrap-hover">
						{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
						<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price price">

							{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
								{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
									<span class="old-price">
										{displayWtPrice p=$product.price_without_reduction}
									</span>
									
								{/if}
								<span itemprop="price" class="product-price">
									{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
								</span>
								<meta itemprop="priceCurrency" content="{$priceDisplay|escape:'html':'UTF-8'}" />
								{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
								
									{if $product.specific_prices.reduction_type == 'percentage'}
									<span class="content_price_percent sale-percent-box" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
										<span class="price-percent-reduction">-{$product.specific_prices.reduction|escape:'html':'UTF-8' * 100}%</span>
									</span>
									{/if}
								{/if}
							{/if}
						</div>
						{/if}						
					</div>

					<div class="action-btn">
						{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
							{if ($product.allow_oosp || $product.quantity > 0)}
								{if isset($static_token)}
									<div class="addtocart cart"><a data-toggle="tooltip"  class="btn btn-shopping-cart btn-outline ajax_add_to_cart_button" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='pspagebuilder'}" data-id-product="{$product.id_product|intval}">
										<i class="icon-shopping-cart"></i>
										<em>{l s='Add to cart' mod='pspagebuilder'}</em>
									</a></div>
								{else}
									<div class="addtocart cart"><a data-toggle="tooltip"  class="btn btn-shopping-cart btn-outline ajax_add_to_cart_button" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='pspagebuilder'}" data-id-product="{$product.id_product|intval}">
										<i class="icon-shopping-cart"></i>
										<span>{l s='Add to cart' mod='pspagebuilder'}</span>
									</a></div>
								{/if}						
							{else}
								<div class="addtocart cart"><span data-toggle="tooltip"  class="btn btn-shopping-cart btn-outline ajax_add_to_cart_button disabled">
									<i class="icon-shopping-cart"></i>
									<span>{l s='Add to cart' mod='pspagebuilder'}</span>
								</span></div>
							{/if}
						{/if}


						{if isset($quick_view) && $quick_view}
							<div class="quickview"><a class="quick-view pts-colorbox btn btn-outline cboxElement" href="{$product.link|escape:'html':'UTF-8'}" rel="{$product.link|escape:'html':'UTF-8'}">
								<i class="icon-eye"></i>
								<span>{l s='Quick view' mod='pspagebuilder'}</span>
							</a></div>
						{/if}	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
