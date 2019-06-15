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
<div class="widget-ourservice">
	<div class="media {if $icon_position == 'top' || $icon_position == 'bottom'}text-center{/if}">
	{if $icon_position == 'left' || $icon_position == 'right' || $icon_position == 'top' }
		{if $icon || $thumbnailurl}
		<div class="media-{$icon_position}">
			{if $icon}
				<i class="material-icons">{$icon|escape:'html':'UTF-8'}</i>
			{elseif $thumbnailurl}
				<img src="{$thumbnailurl|escape:'html':'UTF-8'}" alt="icon"/>
			{/if}
		</div>
		{/if}
	{/if}
		<div class="media-body">
			<h5 class="ourservice-heading">
				{$widget_heading|escape:'html':'UTF-8'}
			</h5>
			<div class="ourservice-content">
				{$content}{* HTML, cannot escape *}
			</div>
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