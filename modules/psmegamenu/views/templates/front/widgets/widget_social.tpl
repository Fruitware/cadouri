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

<div class="widget-social block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget-heading title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</div>
	{/if}
	<div class="widget-inner block_content">
		<ul>
			{if $facebook_url != ''}<li class="facebook"><a class="_blank" href="{$facebook_url|escape:'html':'UTF-8'}">{l s='Facebook' mod='pspagebuilder'}</a></li>{/if}
			{if $twitter_url != ''}<li class="twitter"><a class="_blank" href="{$twitter_url|escape:'html':'UTF-8'}">{l s='Twitter' mod='pspagebuilder'}</a></li>{/if}
			{if $rss_url != ''}<li class="rss"><a class="_blank" href="{$rss_url|escape:'html':'UTF-8'}">{l s='RSS' mod='pspagebuilder'}</a></li>{/if}
			{if $youtube_url != ''}<li class="youtube"><a class="_blank" href="{$youtube_url|escape:'html':'UTF-8'}">{l s='YouTube' mod='pspagebuilder'}</a></li>{/if}
			{if $google_plus_url != ''}<li class="google_plus"><a class="_blank" href="{$google_plus_url|escape:'html':'UTF-8'}">{l s='Google+' mod='pspagebuilder'}</a></li>{/if}
			{if $pinterest_url != ''}<li class="pinterest"><a class="_blank" href="{$pinterest_url|escape:'html':'UTF-8'}">{l s='Pinterest' mod='pspagebuilder'}</a></li>{/if}
			{if $vimeo_url != ''}<li class="vimeo"><a href="{$vimeo_url|escape:'html':'UTF-8'}">{l s='Vimeo' mod='pspagebuilder'}</a></li>{/if}
			{if $instagram_url != ''}<li class="instagram"><a class="_blank" href="{$instagram_url|escape:'html':'UTF-8'}">{l s='Instagram' mod='pspagebuilder'}</a></li>{/if}
		</ul>
	</div>
</div>