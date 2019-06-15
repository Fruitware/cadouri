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

<style type="text/css">
    #page-content{
        min-height: 1200px;
        width: 100%;
        padding-bottom: 100px
    }
</style>

<div id="page-content">
    <div id="menu-form"  style="display: none; left: 340px; top: 15px; max-width:600px" class="popover top out form-setting">
        <div class="arrow"></div>
        <div style="display: block;" class="popover-title">{l s='Sub Menu Setting' mod='psmegamenu'}<span class="badge pull-right"><span class="icon icon-times-circle"></span></span></div>
        <div class="popover-content"> 
            <form  method="post" action="{$liveedit_action|escape:'html':'UTF-8'}"  enctype="multipart/form-data" >
                <div class="col-lg-12"> 
                    <table class="table table-hover">
                        <tr>
                            <td>{l s='Create Submenu' mod='psmegamenu'}</td>
                            <td>
                                <select name="menu_submenu" class="menu_submenu">
                                    <option value="0">{l s='No' mod='psmegamenu'}</option>
                                    <option value="1">{l s='Yes' mod='psmegamenu'}</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>{l s='Submenu Width' mod='psmegamenu'}</td>
                            <td>
                                <input type="text" name="menu_subwidth" class="menu_subwidth"> 
                            </td>
                        </tr>
                        <tr>
                            <td>{l s='Alignment' mod='psmegamenu'}</td>
                            <td>
                                <div class="btn-group button-alignments">
                                    <button type="button" class="btn btn-default" data-option='aligned-left'><span class="icon icon-align-left"></span></button>
                                    <button type="button" class="btn btn-default" data-option="aligned-center"><span class="icon icon-align-center"></span></button>
                                    <button type="button" class="btn btn-default" data-option="aligned-right"><span class="icon icon-align-right"></span></button>
                                    <button type="button" class="btn btn-default" data-option="aligned-fullwidth"><span class="icon icon-align-justify"></span></button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <button type="button" class="add-row btn btn-success btn-sm">{l s='Add Row' mod='psmegamenu'}</button>
                                <button type="button" class="remove-row btn btn-default  btn-sm">{l s='Remove Row' mod='psmegamenu'}</button>
                                | <button type="button" class="add-col btn btn-success  btn-sm">{l s='Add Column' mod='psmegamenu'}</button>
                            </td>
                        </tr>
                    </table>
                    <input type="hidden" name="menu_id">
                </div>
            </form>
        </div>
    </div>
    <div id="column-form" style="display: none; left: 340px; top: 45px;" class="popover top   form-setting">
        <div class="arrow"></div>
        <div style="display: block;" class="popover-title">{l s='Column Setting' mod='psmegamenu'}<span class="badge pull-right"><span class="icon icon-times-circle"></span></span></div>
        <div class="popover-content"> 
            <form method="post" action="{$liveedit_action|escape:'html':'UTF-8'}"  enctype="multipart/form-data" >
                <table class="table table-hover">
                    <tr>
                        <td>{l s='Addition Class' mod='psmegamenu'}</td>
                        <td>
                            <input type="text" name="colclass"> 
                        </td>
                    </tr>
                    <tr>
                        <td>{l s='Column Width' mod='psmegamenu'}</td>
                        <td>
                            <select class="colwidth" name="colwidth">
                                {for $i=1 to 12}
                                    <option value="{$i|escape:'html':'UTF-8'}">{$i|escape:'html':'UTF-8'}</option>
                                {/for}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="button" class="remove-col btn btn-default  btn-sm">{l s='Remove Column' mod='psmegamenu'}</button>
                        </td>
                    </tr>   
                </table>
            </form>
        </div>
    </div>


    <div  id="submenu-form" style="display: none; left: 340px; top: 45px;" class="popover top  form-setting">
        <div class="arrow"></div>
        <div style="display: block;" class="popover-title">{l s='Setting Sub Submenu' mod='psmegamenu'}<span class="badge pull-right"><span class="icon icon-times-circle"></span></span></div>
        <div class="popover-content"> 
            <form method="post" action="{$liveedit_action|escape:'html':'UTF-8'}" enctype="multipart/form-data">
                <input type="hidden" name="submenu_id">
                <table class="table table-hover">
                    <tr>
                        <td>{l s='Group Submenu' mod='psmegamenu'}</td>
                        <td>
                            <select name="submenu_group">
                                <option value="0">{l s='No' mod='psmegamenu'}</option>
                                <option value="1">{l s='Yes' mod='psmegamenu'}</option>
                            </select>
                        </td>
                    </tr>     
                </table>
            </form>
        </div>
    </div>
    <div id="widget-form" style="display: none; left: 340px;  min-width:400px" class="popover bottom   form-setting">
        <div class="arrow"></div>
        <div style="display: block;" class="popover-title">{l s='Widget Setting' mod='psmegamenu'}<span class="badge pull-right"><span class="icon icon-times-circle"></span></span></div>
        <div class="popover-content"> 
            {if !empty($widgets)}
                <div class="input-group">
                    <select name="inject_widget"> 
                        <option value=""></option>
                        {foreach $widgets as $w}
                            {$more = ''}
                            {$info = $model->getWidgetInfo($w['type'])}
                            {if $info}
                                {$more = $info['label']}
                            {/if}
                            <option value="{$w['key_widget']|escape:'html':'UTF-8'}">( {$more|escape:'html':'UTF-8'} )  {$w['name']|escape:'html':'UTF-8'}</option>
                        {/foreach}
                    </select>
                    <span class="input-group-btn">   <button type="button" id="btn-inject-widget" class="btn btn-primary btn-sm">{l s='Insert' mod='psmegamenu'}</button></span>
                </div>
            {/if}
        </div>
    </div>


    <div id="content-s">
        <div class="container">
            <div class="page-header">
                <h1>{l s='Live Megamenu Editor' mod='psmegamenu'}</h1>
            </div>


            <div class="bs-example">
                <div class="alert alert-danger fade in">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <strong>{l s='By using this tool, allow to create sub menu having multiple rows and  multiple columns. You can inject widgets inside columns or group sub menus in same level of parent.Note: Some configurations as group, columns width setting will be overrided' mod='psmegamenu'}</strong>  
                </div>
            </div>
        </div>
        <div id="pav-megamenu-liveedit">

            <div id="toolbar" class="container">
                <div id="menu-toolbars">
                    <div>
                        <div class="pull-right">
                            <a href="{$action_backlink|escape:'html':'UTF-8'}&widgets=1" class="pts-modal-action btn  btn-modeal btn-success btn-action">{l s='Create A Widget' mod='psmegamenu'}</a>
                            - 
                            <a   href="{$live_site_url|escape:'html':'UTF-8'}" class="btn btn-modal btn-primary btn-sm btn-action" >{l s='Preview On Live Site' mod='psmegamenu'}</a> | 
                            <a id="unset-data-menu" href='#' class="btn btn-danger btn-action">{l s='Reset Configuration' mod='psmegamenu'}</a>
                            <button id="save-data-menu" class="btn btn-warning">{l s='Save' mod='psmegamenu'}</button>
                        </div>
                        <a id="save-data-back" class="btn btn-default" href="{$action_backlink|escape:'html':'UTF-8'}">{l s='Back' mod='psmegamenu'}</a>
                    </div>

                </div>
            </div>


            <div class="container">
                <div class="megamenu-wrap">
                    <div class="progress" id="pavo-progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 00%;">
                                    <span class="sr-only">60% Complete</span>
                            </div>
                    </div>
                    <div id="megamenu-content">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{l s='Preview On Live Site' mod='psmegamenu'}</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{l s='Close' mod='psmegamenu'}</button>
            </div>
        </div> 
    </div> 
</div> 


<script type="text/javascript">
    var ptsid_shop = {$ptsid_shop|escape:'html':'UTF-8'};
    $(".btn-modal").click(function () {
        $('#myModal .modal-dialog ').css('width', 980);
        $('#myModal .modal-dialog ').css('height', 480);
        var a = $('<span class="glyphicon glyphicon-refresh"></span><iframe src="' + $(this).attr('href') + '" style="width:100%;height:100%; display:none"/>');
        $('#myModal .modal-body').html(a);

        $('#myModal').modal( );
        $('#myModal').attr('rel', $(this).attr('rel'));
        $(a).load(function () {
            $('#myModal .modal-body .glyphicon-refresh').hide();
            $('#myModal .modal-body iframe').show();
        });
        return false;
    });

    $("#megamenu-content").PavMegamenuEditor({
        'modal': '#myModal', 'action': _action, 'action_menu': _action_menu, 'action_widget': _action_widget, 'action_editwidget': _action_editwidget
    });

</script>