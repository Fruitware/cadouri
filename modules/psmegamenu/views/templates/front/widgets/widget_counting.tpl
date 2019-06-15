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
{if $counting_number}
<div class="widget-counting block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	<div class="widget-inner counters">
	   	<div class="counter-wrap {$text_color|escape:'html':'UTF-8'}">
	   		{if isset($iconurl) && $iconfile}
				<img class="fa" src="{$iconurl|escape:'html':'UTF-8'}" alt="{l s='icon' mod='pspagebuilder'}">
			{elseif $iconclass}
				<i class="fa {$iconclass|escape:'html':'UTF-8'}"></i>
			{/if}
	   		<br><span class="counter">{$counting_number|escape:'html':'UTF-8'}</span>
		</div> 
	    {if isset($widget_heading)&&!empty($widget_heading)}
			<h5>{$widget_heading|escape:'html':'UTF-8'}</h5>
		{/if}
	</div> 
</div>
{/if}



