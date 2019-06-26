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
<div class="testimonials-{$testimonial_position|escape:'html':'UTF-8'}">
    <div class="testimonials-body">
        <div class="testimonials-quote">{$item.content}{* HTML, cannot escape *}</div>
        <div class="testimonials-profile">
            <div class="testimonials-avatar">
                {if isset($item.avatar) && $item.avatar neq "" }
					<img src="{$testimonial_img_link|escape:'html':'UTF-8'}{$item.avatar|escape:'html':'UTF-8'}" alt="{$item.note|escape:'html':'UTF-8'}" />
				{/if}
            </div> 
            <h4 class="name">{$item.name|escape:'html':'UTF-8'}</h4>
            <div class="job">{$item.note|escape:'html':'UTF-8'}</div>
        </div>                    
    </div>
</div>