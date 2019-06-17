{**
* customized header
**}

<div class="header-default text-center">
    <div class="headerMobile hidden-lg-up">
        <div class="container">
            <div class="flexRow">
                <div class="col-xs-2">
                    <button class="btn canvas-menu float-xs-left" data-toggle="offcanvas" type="button"><i class="icon-menu"></i>
                    </button>
                </div>
                <div id="_mobile_logo" class="col-xs-8 text-xs-center">
                </div>
                <div class="col-xs-2">
                    <button class="sidebar-canvas btn canvas-menu float-xs-right" data-toggle="sidebarCanvas" type="button"><i class="icon-shopping-basket"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container hidden-md-down">
        <div id="_desktop_logo" class="headerLeft float-xs-left">
            <div class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
                <a href="{$urls.base_url}" title="{$shop.name}">
                    <img class="logo img-responsive" src="{$shop.logo}" {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if} alt="{$shop.name}">
                </a>
            </div>
        </div>
        <div class="headerCenter inline-block">
            <div id="_desktop_nav" class="nav-top text-center border-bottom">
                {hook h='displayNav2'}
                <div class="social-block-inline">
                    <a href="https://www.facebook.com/CadouriMdDelivery" target="_blank"><i class="icon-facebook"></i>&nbsp;</a>
                    <a href="https://www.youtube.com/channel/UCc9oSNa43GXpECCFdqa3QPg" target="_blank"><i class="icon icon-youtube-play"></i>&nbsp;</a>
                    <a href="https://www.instagram.com/cadouri_md/" target="_blank"><i class="icon-instagram"></i>&nbsp;</a>
                    <a href="#" target="_blank"><i class="icon-telegram"></i>&nbsp;</a>
                    <a href="viber://chat?number=+37379646609" target="_blank"><i class="icon-viber"></i>&nbsp;</a>
                </div>
                <div class="contact-phone-block float-xs-right"><i class="icon-phone"></i> +373 79 64 66 09</div>
            </div>
            <div id="_desktop_menu" class="ps_megamenu ps-desktop-megamenu text-md-center">
                {hook h="displayMainmenu"}
                <div class="float-xs-right">{widget name="ps_searchbar"}</div>
            </div>
        </div>
        <div class="headerRight float-xs-right">
            {widget name="ps_shoppingcart"}
        </div>
    </div>
</div>
