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
        body,html{ height:100%;width:100%;padding:0;margin:0;}
        #loaderContainer {
            z-index: 99999999999;
            position: fixed;
            width: 100%;
            height: 100%;
            background: #2e2e2e;
        }
        .loader {
            height: 100%;
            width: 100%
        }

        .loader .l_main {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 172px;
            height: 128px;
            margin: 0;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .l_square {
            position: relative
        }

        .l_square:nth-child(1) {
            margin-left: 0px
        }

        .l_square:nth-child(2) {
            margin-left: 44px
        }

        .l_square:nth-child(3) {
            margin-left: 88px
        }

        .l_square:nth-child(4) {
            margin-left: 132px
        }

        .l_square span {
            position: absolute;
            top: 0px;
            left: 20px;
            height: 36px;
            width: 36px;
            border-radius: 2px;
            background-color: #FFFFFF
        }

        .l_square span:nth-child(1) {
            top: 0px
        }

        .l_square span:nth-child(2) {
            top: 44px
        }

        .l_square span:nth-child(3) {
            top: 88px
        }

        .l_square:nth-child(1) span {
            -webkit-animation: animsquare1 2s infinite ease-in;
            animation: animsquare1 2s infinite ease-in
        }

        .l_square:nth-child(2) span {
            -webkit-animation: animsquare2 2s infinite ease-in;
            animation: animsquare2 2s infinite ease-in
        }

        .l_square:nth-child(3) span {
            -webkit-animation: animsquare3 2s infinite ease-in;
            animation: animsquare3 2s infinite ease-in
        }

        .l_square:nth-child(4) span {
            -webkit-animation: animsquare4 2s infinite ease-in;
            animation: animsquare4 2s infinite ease-in
        }

        .l_square span:nth-child(1) {
            -webkit-animation-delay: 0.00s;
            animation-delay: 0.00s
        }

        .l_square span:nth-child(2) {
            -webkit-animation-delay: 0.15s;
            animation-delay: 0.15s
        }

        .l_square span:nth-child(3) {
            -webkit-animation-delay: 0.30s;
            animation-delay: 0.30s
        }

        @-webkit-keyframes animsquare1 {
            0%,
            5%,
            95%,
            100% {
                -webkit-transform: translate(0px, 0px) rotate(0deg);
                transform: translate(0px, 0px) rotate(0deg)
            }
            30%,
            70% {
                -webkit-transform: translate(-40px, 0px) rotate(-90deg);
                transform: translate(-40px, 0px) rotate(-90deg)
            }
        }

        @keyframes animsquare1 {
            0%,
            5%,
            95%,
            100% {
                -webkit-transform: translate(0px, 0px) rotate(0deg);
                transform: translate(0px, 0px) rotate(0deg)
            }
            30%,
            70% {
                -webkit-transform: translate(-40px, 0px) rotate(-90deg);
                transform: translate(-40px, 0px) rotate(-90deg)
            }
        }

        @-webkit-keyframes animsquare2 {
            0%,
            10%,
            90%,
            100% {
                -webkit-transform: translate(0px, 0px) rotate(0deg);
                transform: translate(0px, 0px) rotate(0deg)
            }
            35%,
            65% {
                -webkit-transform: translate(-40px, 0px) rotate(-90deg);
                transform: translate(-40px, 0px) rotate(-90deg)
            }
        }

        @keyframes animsquare2 {
            0%,
            10%,
            90%,
            100% {
                -webkit-transform: translate(0px, 0px) rotate(0deg);
                transform: translate(0px, 0px) rotate(0deg)
            }
            35%,
            65% {
                -webkit-transform: translate(-40px, 0px) rotate(-90deg);
                transform: translate(-40px, 0px) rotate(-90deg)
            }
        }

        @-webkit-keyframes animsquare3 {
            0%,
            15%,
            85%,
            100% {
                -webkit-transform: translate(0px, 0px) rotate(0deg);
                transform: translate(0px, 0px) rotate(0deg)
            }
            40%,
            60% {
                -webkit-transform: translate(-40px, 0px) rotate(-90deg);
                transform: translate(-40px, 0px) rotate(-90deg)
            }
        }

        @keyframes animsquare3 {
            0%,
            15%,
            85%,
            100% {
                -webkit-transform: translate(0px, 0px) rotate(0deg);
                transform: translate(0px, 0px) rotate(0deg)
            }
            40%,
            60% {
                -webkit-transform: translate(-40px, 0px) rotate(-90deg);
                transform: translate(-40px, 0px) rotate(-90deg)
            }
        }

        @-webkit-keyframes animsquare4 {
            0%,
            20%,
            80%,
            100% {
                -webkit-transform: translate(0px, 0px) rotate(0deg);
                transform: translate(0px, 0px) rotate(0deg)
            }
            45%,
            55% {
                -webkit-transform: translate(-40px, 0px) rotate(-90deg);
                transform: translate(-40px, 0px) rotate(-90deg)
            }
        }

        @keyframes animsquare4 {
            0%,
            20%,
            80%,
            100% {
                -webkit-transform: translate(0px, 0px) rotate(0deg);
                transform: translate(0px, 0px) rotate(0deg)
            }
            45%,
            55% {
                -webkit-transform: translate(-40px, 0px) rotate(-90deg);
                transform: translate(-40px, 0px) rotate(-90deg)
            }
        }
    </style>
    {block name='head'}
        {include file='_partials/head.tpl'}
    {/block}
</head>

<body id="{$page.page_name}" class="{$page.body_classes|classnames}">
<div id="loaderContainer">
    <div class="loader">
        <div class="l_main">
            <div class="l_square"><span></span><span></span><span></span></div>
            <div class="l_square"><span></span><span></span><span></span></div>
            <div class="l_square"><span></span><span></span><span></span></div>
            <div class="l_square"><span></span><span></span><span></span></div>
        </div>
    </div>
</div>
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
