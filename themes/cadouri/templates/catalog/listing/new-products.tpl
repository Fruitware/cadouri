{*
 * This file allows you to customize your new-product page.
 * You can safely remove it if you want it to appear exactly like all other product listing pages
 *}
{extends file='catalog/listing/product-list.tpl'}
{* Custom by hoanghv *}
{block name='breadcrumb_item'}
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{$urls.base_url}" title="{l s='Home' mod='psblog'}">
            <span itemprop="name">{l s='Home' mod='psblog'}</span>
        </a>
        <meta itemprop="position" content="1">
    </li>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <span itemprop="name">{$listing.label}</span>
        <meta itemprop="position" content="2">
    </li>
{/block}