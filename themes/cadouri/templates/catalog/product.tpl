{**
 * 2007-2018 PrestaShop
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
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file=$layout}

{block name='head_seo' prepend}
    <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
    <meta property="og:type" content="product">
    <meta property="og:site_name" content="{$shop.name}">
    <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
    <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
    {* modified 28.01.2019 for improving FB pixel performance.
     * check /modules/pspixel/views/templates/hook/header.tpl
    <meta property="og:url" content="{$urls.current_url}">
    <meta property="og:title" content="{$page.meta.title}">
    <meta property="product:price:amount" content="{$product.price_amount}">
    <meta property="product:price:currency" content="{$currency.iso_code}">
    <meta property="og:description" content="{$page.meta.description}">
    <meta property="og:image" content="{$product.cover.large.url}">
    *}
    {if isset($product.weight) && ($product.weight != 0)}
        <meta property="product:weight:value" content="{$product.weight}">
        <meta property="product:weight:units" content="{$product.weight_unit}">
    {/if}
{/block}

{block name='content'}
    <section id="main" itemscope itemtype="https://schema.org/Product">
        <meta itemprop="url" content="{$product.url}">
        <div class="pts-product clearfix wow fadeInUp" data-wow-delay="0.5s">
            <div class="row clearfix">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    {block name='page_content_container'}
                        <section class="page-content" id="content">
                            {block name='page_content'}
                                {block name='product_flags'}
                                    <ul class="product-flags">
                                        {foreach from=$product.flags item=flag}
                                            <li class="product-flag {$flag.type}">{$flag.label}</li>
                                        {/foreach}
                                    </ul>
                                {/block}

                                {block name='product_cover_thumbnails'}
                                    {include file='catalog/_partials/product-cover-thumbnails.tpl'}
                                {/block}
                            {/block}
                            {block name='product_additional_info'}
                                {*{include file='catalog/_partials/product-additional-info.tpl'}*}
                            {/block}
                        </section>
                    {/block}
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    {block name='page_header_container'}
                        {block name='page_header'}
                            <h1 class="h1 prodetail-tile"
                                itemprop="name">{block name='page_title'}{$product.name}{/block}</h1>
                        {/block}
                    {/block}
                    {block name='product_prices'}
                        {include file='catalog/_partials/product-prices.tpl'}
                    {/block}
                    {hook h='displayLeoProductReviewExtra' product=$product}
                    <div class="product-information">
                        {block name='product_description_short'}
                            <div id="product-description-short-{$product.id}" class="proShortDesc"
                                 temprop="description">{$product.description_short nofilter}</div>
                        {/block}

                        {if $product.is_customizable && count($product.customizations.fields)}
                            {block name='product_customization'}
                                {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
                            {/block}
                        {/if}

                        <div class="product-actions">
                            {block name='product_buy'}
                                <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                                    <input type="hidden" name="token" value="{$static_token}">
                                    <input type="hidden" name="id_product" value="{$product.id}"
                                           id="product_page_product_id">
                                    <input type="hidden" name="id_customization" value="{$product.id_customization}"
                                           id="product_customization_id">

                                    {block name='product_variants'}
                                        {include file='catalog/_partials/product-variants.tpl'}
                                    {/block}

                                    {block name='product_pack'}
                                        {if $packItems}
                                            <section class="product-pack">
                                                <h3 class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</h3>
                                                {foreach from=$packItems item="product_pack"}
                                                    {block name='product_miniature'}
                                                        {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
                                                    {/block}
                                                {/foreach}
                                            </section>
                                        {/if}
                                    {/block}

                                    {block name='product_discounts'}
                                        {include file='catalog/_partials/product-discounts.tpl'}
                                    {/block}

                                    {block name='product_add_to_cart'}
                                        {include file='catalog/_partials/product-add-to-cart.tpl'}
                                    {/block}

                                    {block name='product_refresh'}
                                        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit"
                                               value="{l s='Refresh' d='Shop.Theme.Actions'}">
                                    {/block}
                                </form>
                            {/block}

                        </div>
                    </div>
                    {block name='product_tabs'}
                    <div class="tabs-info tabs-v1 clearfix wow fadeInUp" data-wow-delay="0.5s">
                        <ul class="nav nav-tabs">
                            {if $product.description}
                                <li class="nav-item">
                                    <a
                                            class="nav-link{if $product.description} active{/if}"
                                            data-toggle="tab"
                                            href="#description">{l s='Description' d='Shop.Theme.Catalog'}</a>
                                </li>
                            {/if}
                            <li class="nav-item">
                                <a
                                        class="nav-link{if !$product.description} active{/if}"
                                        data-toggle="tab"
                                        href="#product-details">{l s='Product Details' d='Shop.Theme.Catalog'}</a>
                            </li>
                            <!-- Custom tab review -->
                            {hook h='displayLeoProductTab' product=$product}

                            {if $product.attachments}
                                <li class="nav-item">
                                    <a
                                            class="nav-link"
                                            data-toggle="tab"
                                            href="#attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
                                </li>
                            {/if}
                            {foreach from=$product.extraContent item=extra key=extraKey}
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#extra-{$extraKey}">{$extra.title}</a>
                                </li>
                            {/foreach}
                        </ul>

                        <div class="tab-content" id="tab-content" role="tabpanel">
                            <div class="tab-pane fade in{if $product.description} active{/if}" id="description">
                                {block name='product_description'}
                                    <div class="product-description">{$product.description nofilter}</div>
                                {/block}
                            </div>

                            {block name='product_details'}
                                {include file='catalog/_partials/product-details.tpl'}
                            {/block}
                            <!-- Custom tabcontent review -->
                            {hook h='displayLeoProductTabContent' product=$product}

                            {block name='product_attachments'}
                                {if $product.attachments}
                                    <div class="tab-pane fade in" id="attachments" role="tabpanel">
                                        <section class="product-attachments">
                                            <h3 class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</h3>
                                            {foreach from=$product.attachments item=attachment}
                                                <div class="attachment">
                                                    <h4>
                                                        <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a>
                                                    </h4>
                                                    <p>{$attachment.description}</p>
                                                    <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                                                        {l s='Download' d='Shop.Theme.Actions'}
                                                        ({$attachment.file_size_formatted})
                                                    </a>
                                                </div>
                                            {/foreach}
                                        </section>
                                    </div>
                                {/if}
                            {/block}

                            {foreach from=$product.extraContent item=extra key=extraKey}
                            <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}"
                                 role="tabpanel" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
                            {$extra.content nofilter}
                        </div>
                        {/foreach}
                    </div>
                </div>
                {/block}
            </div>
        </div>


        {block name='product_footer'}
            {hook h='displayFooterProduct' product=$product category=$category}
        {/block}

        {block name='product_images_modal'}
            {include file='catalog/_partials/product-images-modal.tpl'}
        {/block}

        {block name='page_footer_container'}
            <footer class="page-footer">
                {block name='page_footer'}
                    <!-- Footer content -->
                {/block}
            </footer>
        {/block}
    </section>
{/block}
