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
<!doctype html>
<html lang="{$language.iso_code}">

<head>
    <style>
        body {
            opacity: 0;
        }
    </style>
    {block name='head'}
        {include file='_partials/head.tpl'}
    {/block}
</head>

<body id="{$page.page_name}" class="{$page.body_classes|classnames}">
<div class="row-offcanvas" id="page">
    {block name='hook_after_body_opening_tag'}
        {hook h='displayAfterBodyOpeningTag'}
    {/block}
    <!-- canvas menu & menu sidebar -->
    <div class="menuOffcanvas ps-mobile-megamenu hidden-lg-up" id="_mobile_menu"></div>
    <div class="btn-offcanvas-mobile hidden-lg-up" data-toggle="offcanvas"></div>

    <div class="sidebarOffcanvas ps-mobile-account hidden-lg-up clearfix">
        <div class="offcanvas-heading hidden-lg-up">
            <button class="btn-mobile" type="button" data-toggle="sidebarCanvas">
                <i class="icon icon-arrowright"></i>
            </button>
        </div>
        <div id="_mobile_cart" class="clearfix"></div>
        <div id="_mobile_nav" class="clearfix"></div>
    </div>
    <div class="btn-sidebarOffCanvas-mobile hidden-lg-up" data-toggle="sidebarCanvas"></div>
    <!-- end -->
    <main>
        {block name='product_activation'}
            {include file='catalog/_partials/product-activation.tpl'}
        {/block}

        <header id="header">
            {block name='header'}
                {include file='_partials/header.tpl'}
            {/block}
        </header>

        {block name='notifications'}
            {include file='_partials/notifications.tpl'}
        {/block}

        <section id="wrapper">
            {hook h="displayWrapperTop"}
            <div class="container">
                {block name='breadcrumb'}
                    {include file='_partials/breadcrumb.tpl'}
                {/block}

                {block name="left_column"}
                    <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
                        {if $page.page_name == 'product'}
                            {hook h='displayLeftColumnProduct'}
                        {else}
                            {hook h="displayLeftColumn"}
                        {/if}
                    </div>
                {/block}

                {block name="content_wrapper"}
                    <div id="content-wrapper" class="left-column col-sm-4 col-md-6">
                        {hook h="displayContentWrapperTop"}
                        {block name="content"}
                            <p>Hello world! This is HTML5 Boilerplate.</p>
                        {/block}
                        {hook h="displayContentWrapperBottom"}
                    </div>
                {/block}

                {block name="right_column"}
                    <div class="right-column col-xs-12 col-sm-4 col-md-3">
                        {if $page.page_name == 'product'}
                            {hook h='displayRightColumnProduct'}
                        {else}
                            {hook h="displayRightColumn"}
                        {/if}
                    </div>
                {/block}
            </div>
            {hook h="displayWrapperBottom"}
        </section>

        <footer id="footer" class="footer-center clearfix">
            {block name="footer"}
                {include file="_partials/footer.tpl"}
            {/block}
        </footer>

    </main>

    {block name='javascript_bottom'}
        {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
    {/block}


    <a id="to_top" href="javascript:;" style="display: inline;" title="{l s='Go Top' d='Shop.Theme.Global'}"><span
                class="icon-schevron-up"></span></a>
</div>

{block name='hook_before_body_closing_tag'}
    {hook h='displayBeforeBodyClosingTag'}
{/block}
</body>

</html>
