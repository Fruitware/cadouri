{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   pspagebuilder
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) November 2016 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}

<!-- Block Newsletter module-->
<div id="newsletter_block_footer" class="block pts-newsletter {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{else}block-borderbox{/if}">
    <h4 class="title_block">{if isset($widget_heading)&&!empty($widget_heading)}{$widget_heading|escape:'html':'UTF-8'}{else}{l s='Sign up for newsletter' mod='pspagebuilder'}{/if}</h4>
    {if $information}
        <div class="text-muted">{$information}{* HTML, can not escape *}</div>
    {/if}
    <form action="{$link->getPageLink('index', null, null, null, false, null, true)|escape:'html':'UTF-8'}" method="post">
        <div class="input-group newsletter-group">
            <input class="newsletter-input form-control" id="newsletter-input-footer" type="text" name="email"  placeholder="{if isset($value) && $value}{$value|escape:'html':'UTF-8'}{else}{l s='Your Email...' mod='pspagebuilder'}{/if}" />
            <div class="input-group-btn">
                <input type="hidden" name="action" value="0" />
                    <button type="submit" class="btn btn-newsletter" name="submitNewsletter" ><i class="icon icon-envelope"></i></button> 
            </div>
        </div>
    </form>
    {if isset($smarty.post.email)}
    <div class="alert {$classalert}">{$alert}</div>
    {/if}
</div>
 


<script type="text/javascript">
    var placeholder = "{l s='your e-mail' mod='pspagebuilder' js=1}";
    {literal}
        $(document).ready(function() {
            $('#newsletter-input-footer').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });

            $("#newsletter_block_footer form").submit(function() {  
                if ($('#newsletter-input-footer').val() == placeholder) {
                    $("#newsletter_block_footer .alert").removeClass("hide");
                    return false;
                }else {
                     $("#newsletter_block_footer .alert").addClass("hide");
                     return true;
                }
            });
        });

    {/literal}
</script>