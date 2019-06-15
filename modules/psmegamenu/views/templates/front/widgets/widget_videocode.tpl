{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   psmegamenu
* @version   2.5
* @author    http://www.prestabrain.com
* @copyright Copyright (C) November 2016 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if isset($video_link)}
<div class="widget-video">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget-heading">
		{$widget_heading|escape:'html':'UTF-8'}
	</div>
	{/if}
	<div class="widget-inner">
		<iframe src="{$video_link|escape:'htmlall':'UTF-8'}" style="width:{$width|escape:'html':'UTF-8'};height:{$height|escape:'html':'UTF-8'};" allowfullscreen></iframe>
	</div>
</div>
{/if}