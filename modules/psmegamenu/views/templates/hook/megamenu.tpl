{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   psmegamenu
* @version   2.5
* @author    http://www.prestabrain.com
* @copyright Copyright (C) November 2016 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
<nav id="cavas_menu" class="ps-megamenu clearfix">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="offcanvas-heading hidden-lg-up">
        <button class="btn btn-mobile" type="button" data-toggle="offcanvas">
            <span class="material-icons icon-left">keyboard_backspace</span>
        </button>
    </div>
    <div id="pts-top-menu">
        {$psmegamenu}{* HTML, can not escape *}
    </div>
</nav>
<script type="text/javascript">
     // Offcanvas
     jQuery('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active')
    });
    jQuery( "body" ).on( "click", "i.click-canavs-menu", function() {
        $(this).parent().find('.dropdown-menu:first').toggle();
    });
</script>