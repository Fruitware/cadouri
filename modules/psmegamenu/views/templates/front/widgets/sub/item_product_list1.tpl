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
<div class="product-block" >
	<div class="product-container media" itemscope="" itemtype="http://schema.org/Product">
		<div class="product-image-container image pull-left">
			<a class="img product_img_link"	href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url">
				<img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" title="{if !empty($product.legend)}{$product.legend|escape:'html':'UTF-8'}{else}{$product.name|escape:'html':'UTF-8'}{/if}" itemprop="image" />
			</a>
		</div>
		<div class="product-meta media-body">
			<h3 class="name" itemprop="name">
				{if isset($product.pack_quantity) && $product.pack_quantity}{$product.pack_quantity|intval|cat:' x '}{/if}
				<a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}" itemprop="url" >
					{$product.name|truncate:45:'...'|escape:'html':'UTF-8'}
				</a>
			</h3>
			{hook h='displayProductListReviews' product=$product}
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
								{if isset($product.available_now) && $product.available_now}{$product.available_now}{else}{l s='In Stock'}{/if}{/if}
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
	</div>
</div>
