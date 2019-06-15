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
{if isset($video_link)}
<div class="widget block widget-video {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
 {if isset($widget_heading)&&!empty($widget_heading)}
 <h4 class="widget-heading title_block">
  {$widget_heading|escape:'html':'UTF-8'}
 </h4>
 {/if}
 <div class="widget-inner block_content">
  <iframe src="{$video_link|escape:'html':'UTF-8'}" style="width:{$width|escape:'html':'UTF-8'};height:{$height|escape:'html':'UTF-8'};" allowfullscreen="true"></iframe>
  {if $subinfo}
  <div>{$subinfo|escape:'html':'UTF-8'}</div>
  {/if}
 </div>
</div>
{/if}