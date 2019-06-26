{block name='product_miniature_item'}
    <article
            class="product-miniature js-product-miniature {if Configuration::get('PTS_CP_PRODUCT_LAYOUT') == 'swap'}swap{/if}"
            data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}"
            itemscope itemtype="http://schema.org/Product">
        <div class="thumbnail-container">
            <div class="left-block text-xs-center">
                {block name='product_thumbnail'}
                    <a href="{$product.url}" class="thumbnail product-thumbnail">
                        <figure>
                            <img class="img-fluid" src="{$product.cover.bySize.home_default.url}"
                                 alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}">
                        </figure>
                    </a>
                {/block}
                {hook h='displayProductListSwap' product=$product}
                {block name='product_flags'}
                    <ul class="product-flags">
                        {foreach from=$product.flags item=flag}
                            <li class="{$flag.type}">{$flag.label}</li>
                        {/foreach}
                        {if $product.discount_type === 'percentage'}
                            <li class="discount-percentage">{$product.discount_percentage}</li>
                        {/if}
                    </ul>
                {/block}
                {block name='product_variants'}
                    {if $product.main_variants}
                        {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
                    {/if}
                {/block}
                {if $product.show_price}
                    {block name='product_price_and_shipping'}
                        <div class="product-price-and-shipping">
                            {hook h='displayProductPriceBlock' product=$product type="before_price"}
                            <span itemprop="price" class="price">{$product.price}</span>
                            {hook h='displayProductPriceBlock' product=$product type='unit_price'}
                            {hook h='displayProductPriceBlock' product=$product type='weight'}
                            {if $product.has_discount}
                                {hook h='displayProductPriceBlock' product=$product type="old_price"}
                                <span class="regular-price">{$product.regular_price}</span>
                            {/if}
                        </div>
                    {/block}
                {/if}
            </div>
            <div class="right-block product-description  text-xs-center clearfix">
                {if isset($product.js)}
                    <div class="wrap-countdown">
                        <div class="pts-countdown-{$product.id_product|escape:'html':'UTF-8'} item-countdown">
                            {if $product.js == 'unlimited'}
                                <div class="labelexpired">{l s='Unlimited'}</div>{/if}
                        </div>
                        {if $product.js != 'unlimited'}
                            <script type="text/javascript">
                                {literal}
                                jQuery(document).ready(function ($) {{/literal}
                                    $(".pts-countdown-{$product.id_product|escape:'html':'UTF-8'}").lofCountDown({literal}{{/literal}
                                        TargetDate: "{$product.js.month|escape:'html':'UTF-8'}/{$product.js.day|escape:'html':'UTF-8'}/{$product.js.year|escape:'html':'UTF-8'} {$product.js.hour|escape:'html':'UTF-8'}:{$product.js.minute|escape:'html':'UTF-8'}:{$product.js.seconds|escape:'html':'UTF-8'}",
                                        DisplayFormat: "<div><div class=\"countdown_num\">%%D%% </div></div><div><div class=\"countdown_num\">%%H%% </div></div><div><div class=\"countdown_num\">%%M%%</div></div><div><div class=\"countdown_num\">%%S%%</div></div>",
                                        FinishMessage: "{$product.finish|escape:'html':'UTF-8'}"
                                        {literal}
                                    });
                                });
                                {/literal}
                            </script>
                        {/if}
                    </div>
                {/if}
                <div class="product-meta">
                    {block name='product_name'}
                        <h4 class="product-title" itemprop="name"><a
                                    href="{$product.url}">{$product.name|truncate:30:'...'}</a></h4>
                    {/block}
                </div>
                {hook h='displayLeoProductListReview' product=$product}
                {block name='product_list_actions'}
                    <div class="ps_group text-xs-center clearfix">
                        {hook h='displayLeoCartButton' product=$product}
                        <form action="{$urls.pages.cart}" method="post" class="add_to_cart_form">
                            <input type="hidden" value="{$product.id_product}" name="id_product">
                            <input type="number" class="input-group form-control" name="qty" min="1" value="1">
                            <button data-button-action="add-to-cart" class="btn btn-outline-pink">
                                {l s='Add to cart' d='Shop.Theme.Global'}
                            </button>
                        </form>
                        <div class="btn-action">
                            <div class="flex-buttons">
                                {hook h='displayLeoWishlistButton' product=$product}
                                {hook h='displayLeoCompareButton' product=$product}
                                <div class="quick-view highlighted-informations{if !$product.main_variants} no-variants{/if}">
                                    <a href="#" class="quick-view-btn btn btn-product" data-link-action="quickview"
                                       title="{l s='Quick view' d='Shop.Theme.Actions'}">
                                        <i class="icon-search-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div class="compare">
                                    <a class="leo-compare-button btn-product btn" href="#" data-id-product="321"
                                       title="Add to Compare">
                                        <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                        <span class="leo-compare-bt-content">
			<i class="icon-update" aria-hidden="true"></i>
		</span>
                                    </a>
                                </div>
                                <div class="wishlist">
                                    <a class="leo-wishlist-button btn-product btn" href="#" data-id-wishlist=""
                                       data-id-product="321" data-id-product-attribute="0" title="Add to Wishlist">
                                        <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                        <span class="leo-wishlist-bt-content">
				<i class="icon-heart-solid"></i>
			</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                {/block}

                {block name='product_description_short'}
                    {*<div class="product-description-short" itemprop="description">{$product.description_short nofilter}</div>*}
                {/block}
                {block name='product_availability'}
                    {if $product.show_availability}
                        {* availability may take the values "available" or "unavailable" *}
                        <span class="product-availability {$product.availability}">{$product.availability_message}</span>
                    {/if}
                {/block}

            </div>
        </div>
    </article>
{/block}
