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
<div class="widget-iconbox {$text_align|escape:'html':'UTF-8'}">
    <div class="media {if $icon_position == 'top' || $icon_position == 'bottom'}text-center{/if}">
        {if $icon_position == 'left' || $icon_position == 'right' || $icon_position == 'top' }
            <div class="media-{$icon_position}">
            	{if isset($linkurl) && $linkurl}
                <a href="{$linkurl|escape:'html':'UTF-8'}" title="{if isset($widget_heading)&&!empty($widget_heading)}{$widget_heading|escape:'html':'UTF-8'}{/if}">
                {/if}
                	{if isset($iconurl) && $iconfile}
        				<img  src="{$iconurl|escape:'html':'UTF-8'}" alt="">
        			{elseif $iconclass}
        				<i class="material-icons">{$iconclass|escape:'html':'UTF-8'}</i>
        			{/if}
                {if isset($linkurl) && $linkurl}
                </a>
                {/if}
            </div>
        {/if}
        <div class="media-body">                          
            {if isset($widget_heading)&&!empty($widget_heading)}
    		<h4 class="fbox-title">
    			{$widget_heading|escape:'html':'UTF-8'}
    		</h4>
    		{/if}

    		{if isset($htmlcontent) && $htmlcontent}
            <p>{$htmlcontent}{* HTML, cannot escape *}</p>
            {/if}
        </div>
        {if $icon_position == 'bottom'}
            {if $icon || $thumbnailurl}
            <div class=" ">
                {if $icon}
                    <i class="material-icons">{$icon|escape:'html':'UTF-8'}</i>
                {elseif $thumbnailurl}
                    <img src="{$thumbnailurl|escape:'htmlall':'UTF-8'}" alt="icon"/>
                {/if}
            </div>
            {/if}
        {/if}
    </div>
</div>