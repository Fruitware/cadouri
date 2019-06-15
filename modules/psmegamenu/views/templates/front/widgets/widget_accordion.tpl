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
{if isset($accordions)}
<div class="widget-accordion block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</h4>
	{/if}
	<div class="widget-inner block_content">	<div id="accordion{$id|escape:'html':'UTF-8'}" class="panel-group">
	 	{foreach $accordions as $key => $ac}
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h4 class="panel-title">
				      <a href="#collapseAc{$id|escape:'html':'UTF-8'}{$key|escape:'html':'UTF-8'}" data-parent="#accordion{$id|escape:'html':'UTF-8'}" data-toggle="collapse" class="accordion-toggle collapsed">
				       	{$ac.header|escape:'html':'UTF-8'}
				      </a>
				    </h4>
				  </div>
				  <div class="panel-collapse collapse {if $key==0} in {else} out{/if}" id="collapseAc{$id|escape:'html':'UTF-8'}{$key|escape:'html':'UTF-8'}"  >
				    <div class="panel-body">
				      {$ac.content}{* HTML, cannot escape *}
				    </div>
				  </div>
				</div>
			
	 	{/foreach}
	</div>	</div>
</div>
{/if}


