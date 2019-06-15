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
         data-columns="1" {if isset($pagination) && $pagination} data-pagination="true" {else} data-pagination="false" {/if}
         data-navigation="true"
         data-desktop="[1200,1]"
         data-desktopsmall="[992,1]"
         data-tablet="[768,1]"
         data-mobile="[480,1]">
        {$mproducts=array_chunk($items,$columns)}
        {$delay = $delay + 0.15}
        {foreach from=$mproducts item=products name=mypLoop}
            <div class="item wow fadeInUp flexRow">
                {foreach from=$products item=item name=item_name}
                    <div class="item_wrap col-xs-cus-12 {if isset($list_mode)&& $list_mode == 'style-list' }col-xs-12 col-sm-12 col-lg-12{else}col-xs-6 col-md-4 col-lg-{12/($columns/2)}{/if}"
                         data-wow-delay="{$delay}s">
                        <div class="item_wrap_inner">
                            {include file="sub/product/{$list_mode}.tpl" product=$item class=''}
                        </div>
                    </div>
                {/foreach}
            </div>
        {/foreach}
    </div>
</div>
