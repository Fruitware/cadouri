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
<div class="widget-facebook block {$addition_cls|escape:'html':'UTF-8'}" style="width:{$width|escape:'html':'UTF-8'}" >
	{if isset($widget_heading)&&!empty($widget_heading)}
		<div class="widget-heading title_block">
			{$widget_heading|escape:'html':'UTF-8'}
		</div>
	{/if}
	{if isset($application_id)&&$application_id}
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/{$displaylanguage|escape:'html':'UTF-8'}/all.js#xfbml=1&appId={$application_id|escape:'html':'UTF-8'}";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	{else}
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/{$displaylanguage|escape:'html':'UTF-8'}/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	{/if}
	<div class="widget-inner">
		<div class="fb-like-box" data-href="{$page_url|escape:'html':'UTF-8'}" data-colorscheme="{$color|escape:'html':'UTF-8'}" data-height="{$height|escape:'html':'UTF-8'}" data-width="{$width|escape:'html':'UTF-8'}" data-show-faces="{$show_faces|escape:'html':'UTF-8'}" data-stream="{$show_stream|escape:'html':'UTF-8'}" data-show-border="{$show_border|escape:'html':'UTF-8'}" data-header="{$show_header|escape:'html':'UTF-8'}"></div>
	</div>
</div>
 