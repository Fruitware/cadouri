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
{*
   Custom by Prestabrain
*}
{if !isset($product_style)}
    {$product_style = Configuration::get('PTS_CP_PRODUCT_STYLE')}
{/if}
{if Configuration::get('PTS_CP_PRODUCTS_ITEMROW')}
    {assign var='nbItemsPerLine' value=Configuration::get('PTS_CP_PRODUCTS_ITEMROW')}
{else}
    {assign var='nbItemsPerLine' value=4}
{/if}
<div id="js-product-list">
    <div class="clearfix flexRow products products-block grid {if isset($product_style) && !empty($product_style)}{$product_style}{else} style1{/if}">
        {foreach from=$listing.products item=product name=products}
            <div class="col-xs-cus-12 col-xs-12 col-sm-6 col-md-4 col-xl-{12/$nbItemsPerLine}">
                <div class="item">
                    {block name='product_miniature'}
                        {if isset($product_style) && !empty($product_style)}
                            {include file="sub/product/style1.tpl" product=$product }
                        {else}
                            {include file="sub/product/style1.tpl" product=$product}
                        {/if}
                    {/block}

                </div>
            </div>
        {/foreach}
    </div>
    <div class="ps_sortPagiBar bottom-line clearfix">
        {block name='pagination'}
            {include file='_partials/pagination.tpl' pagination=$listing.pagination}
        {/block}
    </div>
    <!-- <div class="hidden-md-up text-xs-right up">
    <a href="#header" class="btn btn-secondary">
      {l s='Back to top' d='Shop.Theme.Actions'}
      <i class="icon-schevron-up"></i>
    </a>
  </div> -->
</div>
