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
{if $blockCategTree && $blockCategTree.children|@count}
<!-- Block categories module -->
<div class="block block-highlighted nopadding">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<div class="widget-heading title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</div>
	{/if}
	<div class="block_content tree-menu">
		<ul class="list-block  tree {if $isDhtml}dhtml{/if} block-category">
			{foreach from=$blockCategTree.children item=child name=blockCategTree}
				{if $smarty.foreach.blockCategTree.last}
					{include file="$branche_tpl_path" node=$child last='true'}
				{else}
					{include file="$branche_tpl_path" node=$child}
				{/if}
			{/foreach}
		</ul>
	</div>
</div>
<!-- /Block categories module -->
{/if}
