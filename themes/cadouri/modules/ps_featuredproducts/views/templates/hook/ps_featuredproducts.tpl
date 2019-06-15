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
<section class="featured-products clearfix block card card-block">
  <h4 class="h1 products-section-title title_homepage clearfix">
    {l s='Popular Products' d='Shop.Theme.Catalog'}
  </h4>
  <div class="block_content">
    <div class="products flexRow owl-wrapper grid products-block ps_products borderBottom {if isset($product_style) && !empty($product_style)}{$product_style}{else} style1{/if}">
      {foreach from=$products item="product"}
        <div class="owl-item col-xs-12 col-sm-6 col-md-3">
          <div class="item">
            {block name='product_miniature'}
              {if isset($product_style) && !empty($product_style)}
                {include file="sub/product/style1.tpl" product=$product}
              {else}
                {include file="sub/product/style1.tpl" product=$product}
              {/if}
            {/block}
          </div>
        </div>
      {/foreach}
    </div>
  </div>
  <p class="clearfix text-xs-center">
    <a class="all-product-link  btn btn-outline-pink" href="{$allProductsLink}">
      {l s='All products' d='Shop.Theme.Catalog'}
    </a>
  </p>
</section>