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
<div class="footer-center clearfix">
    <div class="container">
        <div class="row custombanners displayFooter clearfix">
            <div class="cb-wrapper" data-wrapper="13">
                <div class="banner-item block-contactinfo text-left col-md-3 col-xs-12">
                    <h4 class="title_block">{l s='Contacts' d='Shop.Theme.Global'}</h4>
                    <ul class="nav">
                        <li class="nav-item contactAdress">
                            <i class="icon-geo"></i>
                            <div>
                                                <span class="title">{l s='Address' d='Shop.Theme.Global'}
                                                    :</span> {l s='bd. Decebal 139' d='Shop.Theme.Global'}
                            </div>
                        </li>
                        <li class="nav-item contactPhone">
                            <i class="icon-phone"></i>
                            <div>
                                                <span class="title">{l s='Phone' d='Shop.Theme.Global'}
                                                    :</span> {l s='+373 796 46 609' d='Shop.Theme.Global'}
                            </div>
                        </li>
                        <li class="nav-item contactEmail">
                            <i class="icon-mail"></i>
                            <div>
                                                <span class="title">&nbsp;{l s='Email' d='Shop.Theme.Global'}
                                                    :</span> {l s='olga.pencencova@gmail.com'}
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="banner-item text-left col-md-6 col-xs-12">
                    <h4 class="title_block">{l s='Policies' d='Shop.Theme.Global'}</h4>
                    <ul class="nav-links">
                        <li class="list-item"><a
                                    href="{l s='/en/content/6-payment-delivery-policy' d='Shop.Theme.Global'}">{l s='Payment & Delivery Policy' d='Shop.Theme.Global'}</a>
                        </li>
                        <li class="list-item"><a
                                    href="{l s='/en/content/7-privacy-policy' d='Shop.Theme.Global'}">{l s='Privacy Policy' d='Shop.Theme.Global'}</a>
                        </li>
                    </ul>
                </div>
                <div class="banner-item text-left col-md-3 col-xs-12">
                    <h4 class="title_block">{l s='Follow us' d='Shop.Theme.Global'}</h4>
                    <div class="social-block-inline footer-block"><a
                                href="https://www.facebook.com/CadouriMdDelivery" target="_blank"><i
                                    class="icon-facebook"></i>&nbsp;</a> <a
                                href="https://plus.google.com/b/114994901007250595971"
                                target="_blank"><i class="icon-gplus"></i>&nbsp;</a> <a
                                href="https://www.instagram.com/cadouri_md/" target="_blank"><i
                                    class="icon-instagram"></i></a> <a href="#"
                                                                       target="_blank"><i
                                    class="icon-telegram"></i>&nbsp;</a> <a
                                href="viber://chat?number=+37379646609" target="_blank"><i
                                    class="icon-viber"></i>&nbsp;</a></div>
                </div>
                <div class="banner-item text-left col-md-3 col-xs-12">
                    <h4 class="title_block">{l s='Payment methods' d='Shop.Theme.Global'}</h4>
                    <a href="#"><img class="img-fluid" src="/themes/cadouri/assets/img/footer-cards.png" alt=""></a>
                </div>
            </div>
        </div>
        {block name='copyright_link'}
            <div class="footer-bottom text-center">Copyright© {date('Y')} cadouri.md.
                <span class="grey-note">All Rights Reserved.</span></div>
        {/block}
    </div>
</div>