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
{foreach from=$rows item=row name=row}

    {if $row->level==1} 
        <div class="pts-container {$row->cls|escape:'html':'UTF-8'} {if isset($row->parallax)&&$row->parallax} pts-parallax{/if}" {$row->attrs}{* HTML, cannot escape *}>        
            <div class="pts-inner container{if $row->fullwidth==1}-fluid{/if}">
    {/if}
    {if $row->level==2}
        <div class="pts-row-wrap" {$row->attrs}>
    {/if}    
    <div class="row-inner row-level-{$row->level|escape:'html':'UTF-8'}">
        <div class="row {if isset($row->sfxcls)&&$row->sfxcls}row-{$row->sfxcls|escape:'html':'UTF-8'} {/if} {if $row->level>=2}{$row->cls|escape:'html':'UTF-8'}{/if} clearfix" >
            {foreach $row->cols as $col}
                <div class="col-lg-{$col->lgcol|escape:'html':'UTF-8'} col-md-{$col->mdcol|escape:'html':'UTF-8'} col-sm-{$col->smcol|escape:'html':'UTF-8'} col-xs-{$col->xscol|escape:'html':'UTF-8'}">
                    {if $row->level==2} 
                       {if isset($row->parallax)&&$row->parallax}
                         <div class="{if isset($row->parallax)&&$row->parallax} pts-parallax{/if}" {$row->attrs}{* HTML, cannot escape *}> 
                        {/if}
                    {/if}
                        <div class="col-inner {if isset($col->sfxcls)&&$col->sfxcls}col-{$col->sfxcls|escape:'html':'UTF-8'}{/if} {$col->cls|escape:'html':'UTF-8'}" {$col->attrs}{* HTML, cannot escape *}>
                        {foreach $col->widgets as $widget}
                            {if isset($widget->content)}
                            <div class="widget-{$widget->wtype|escape:'html':'UTF-8'}">
                                {$widget->content}{* HTML, cannot escape *}
                            </div>
                            {/if}
                        {/foreach}
                        {if isset($col->rows)&&$col->rows}
                            {include file="$layout_tpl" rows=$col->rows}
                        {/if}
                        </div>

                    {if $row->level==2} 
                        {if isset($row->parallax)&&$row->parallax}
                         </div>
                        {/if}
                    {/if}
                </div>
            {/foreach}
        </div>
    </div>
    {if $row->level==2}
        </div>
    {/if}
    {if $row->level==1}
            </div>
        </div>
    {/if}
{/foreach}    