{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="_desktop_cart">
    <div class="text-lg-center blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}"
         data-refresh-url="{$refresh_url}">
        <div class="header text-md-left">
            {if $cart.products_count > 0}
            <a rel="nofollow" href="{$cart_url}">
                {/if}
                <span class="cart-title">{l s='Cart' d='Shop.Theme.Checkout'}
                    : {$cart.products_count} {if $cart.products_count <= 1}{l s='Item' d='Shop.Theme.Checkout'}{else}{l s='Item(s)' d='Shop.Theme.Checkout'}{/if}</span>
                <span class="cart-products-price">{$cart.totals.total.value}</span>
                {if $cart.products_count > 0}
            </a>
            {/if}
        </div>
        {if $cart.products_count > 0}
            <div class="ps_cartcontent hidden-md-down text-md-left">
                <div class="body">
                    {foreach from=$cart.products item='product'}
                        <div class="car-product clearfix">
                            <a href="{$product.url}" class="cart-image float-xs-left">
                                <img class="img-fluid" src="{$product.cover.bySize.small_default.url}"
                                     alt="{$product.cover.legend}"
                                     data-full-size-image-url="{$product.cover.large.url}">
                            </a>
                            <h6 class="cart-name"><a href="{$product.url}" title="{$product.name}">{$product.name}</a>
                            </h6>
                            <span class="cart-quantity"><label>{l s='Qty:' d='Shop.Theme.Global'}</label>{$product.quantity_wanted}</span>
                            <span class="cart-price price">{$product.price_tax_exc}</span>
                            <a href="{$product.remove_from_cart_url}" data-link-action="delete-from-cart"
                               title="{l s='remove from cart' d='Shop.Theme.Actions'}" class="remove-from-cart"
                               rel="nofollow"><i class="icon-close"></i></a>
                        </div>
                    {/foreach}
                    <div class="cart-group clearfix">
                        <div class="cart_shopping text-xs-right clearfix"><label
                                    class="float-xs-left">{l s='Shipping' d='Shop.Theme.Global'}</label><span
                                    class="price">{$cart.subtotals.shipping.value}</span></div>
                        <div class="cart_total text-xs-right clearfix"><label
                                    class="float-xs-left">{l s='Total' d='Shop.Theme.Global'}</label><span
                                    class="price">{$cart.totals.total.value}</span></div>
                    </div>
                    <div class="cart-buttons clearfix float-xs-right"><a class="btn btn-default" rel="nofollow"
                                                                         href="{$cart_url}"> {l s='Check out' d='Shop.Theme.Global'}</a>
                    </div>
                </div>
            </div>
        {/if}
    </div>
</div>

