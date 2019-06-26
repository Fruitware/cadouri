{if !isset($product_style)}
    {$product_style = Configuration::get('PTS_CP_PRODUCT_STYLE')}
{/if}
<div class="{if isset($carousel_style) && $carousel_style} carousel_{$carousel_style}{/if} widget-content owl-carousel-play"
     data-ride="owlcarousel">
    {if count($items) > $columns}
        <div class="carousel-controls">
            <a class="left carousel-control left_carousel icon-next wow fadeInLeft" href="#" data-wow-delay="0.2s"><span
                        class="icon-shortarrowleft"></span></a>
            <a class="right carousel-control right_carousel icon-prev wow fadeInRight" href="#"
               data-wow-delay="0.2s"><span class="icon-shortarrowright"></span></a>
        </div>
    {/if}
    {$delay = 0}
    <div class="owl-carousel {if isset($class) && $class} {$class} {/if}"
         data-columns="{$columns|escape:'html':'UTF-8'}" {if isset($pagination)} data-pagination="true" {else}  data-pagination="false" {/if}
         data-navigation="true"
            {if isset($nbr_desktops)}data-desktop="[1200,{$nbr_desktops|escape:'html':'UTF-8'}]"{/if}
            {if isset($nbr_tablets)}data-desktopsmall="[992,{$nbr_tablets|escape:'html':'UTF-8'}]"{/if}
            {if isset($nbr_mobile)}data-tablet="[768,{$nbr_mobile|escape:'html':'UTF-8'}]"{/if}
         data-mobile="[480,1]">
        {foreach from=$items item=item name=item_name}
            {$delay = $delay + 0.15}
            <div class="item wow fadeInUp" data-wow-delay="{$delay}s">
                {if isset($product_style) && !empty($product_style)}
                    {block name='product_miniature'}
                        {include file='sub/product/{$product_style}.tpl' product=$item class=''}
                    {/block}
                {else}
                    {block name='product_miniature'}
                        {include file="sub/product/style1.tpl" product=$item class=''}
                    {/block}
                {/if}
            </div>
        {/foreach}
    </div>
</div>
