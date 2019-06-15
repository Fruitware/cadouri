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
{if isset($links)}
<div class="widget widget-links block {if isset($list_style) && ($list_style == 'list-special')}list-special{/if} {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</h4>
	{/if}
	<div class="widget-inner block_content">	
		<div  class="panel-group">		
			<ul class="nav-links">
			  {foreach $links as $key => $ac}
			  	{if (!empty($ac.link) && !empty($ac.text))}   
			  		<li {if isset($list_style) && !empty($list_style)} class="{$list_style}"{/if}><a href="{$ac.link|escape:'htmlall':'UTF-8'}" >{$ac.text}{* HTML, cannot escape *}</a></li>
			  	{/if}
			  {/foreach}
			</ul>
		</div>
	</div>
</div>
{/if}




