{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   psmegamenu
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2017 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if isset($thumbnailurl)}
<div class="widget widget-images block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if} {$animation|escape:'html':'UTF-8'}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="widget-heading title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</h4>
	{/if}
	<div class="widget-inner block_content clearfix">
		 <div class="image-item">
			 	<a href="{if $link_url}{$link_url|escape:'htmlall':'UTF-8'}{else}#{/if}" class="pts-btnlink img-animation" title="{l s='Large Image' d='Shop.Theme.Global'}">
			 		<img class="img-fluid" src="{$thumbnailurl|escape:'html':'UTF-8'}" alt="" />
			 	</a>
		 </div>
	</div>
</div>
{/if} 