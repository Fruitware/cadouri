<div class="container">
    <div class="row custombanners displayFooter clearfix" data-hook="displayFooter">
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
            <div class="banner-item policies text-left col-md-6 col-xs-12">
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
                                class="icon-facebook"></i></a> <a
                            href="https://www.youtube.com/channel/UCc9oSNa43GXpECCFdqa3QPg"
                            target="_blank"><i class="icon icon-youtube-play"></i></a> <a
                            href="https://www.instagram.com/cadouri_md/" target="_blank"><i
                                class="icon-instagram"></i></a> <a href="#"
                                                                   target="_blank"><i
                                class="icon-telegram"></i></a> <a
                            href="viber://chat?number=+37379646609" target="_blank"><i
                                class="icon-viber"></i></a></div>
            </div>
            <div class="banner-item text-left col-md-3 col-xs-12">
                <h4 class="title_block">{l s='Payment methods' d='Shop.Theme.Global'}</h4>
                <a href="#" class="paytypes">
                    <i class="iconm-MasterCard"></i>
                    <i class="iconm-PayNet"></i>
                    <i class="iconm-Visa"></i>
                    <i class="iconm-PayPal"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom text-center">
    Copyright© {date('Y')} cadouri.md.
    <span class="grey-note">All Rights Reserved.</span>
</div>

{block name='stylesheets'}
    {include file="_partials/stylesheets.tpl" stylesheets=$stylesheets}
{/block}
