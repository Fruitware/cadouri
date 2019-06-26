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
{if isset($username)}
<div class="widget-twitter block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</h4>
	{/if}
	<div class="widget-inner block_content">
		<a 
			class             = "twitter-timeline"
			data-dnt          = "true"
			data-theme        = "{$theme|escape:'html':'UTF-8'}"
			data-link-color   = "#000000"
			width             = "{$width|escape:'html':'UTF-8'}"
			height            = "{$height|escape:'html':'UTF-8'}"
			data-chrome       = "{$chrome|escape:'html':'UTF-8'} transparent"
			data-border-color = "{$border_color|escape:'html':'UTF-8'}"
			lang              = "EN" data-tweet-limit="{$count|escape:'html':'UTF-8'}"
			data-show-replies = "{$show_replies|escape:'html':'UTF-8'}"
			href              = "https://twitter.com/{$username|escape:'html':'UTF-8'}"
			data-widget-id    = "{$twidget_id|escape:'html':'UTF-8'}"
		>Tweets by @{$username|escape:'html':'UTF-8'}</a>


		{$js}{* HTML, cannot escape *}
	</div>
</div>
{/if} 