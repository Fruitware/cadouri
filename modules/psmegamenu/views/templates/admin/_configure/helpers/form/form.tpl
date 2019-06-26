/**
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

{extends file="helpers/form/form.tpl"}
{block name="field"}
	{if $input.type == 'file_pts'}
		<div class="row">
			<div class="col-lg-6">
				{if isset($input['image']) && $input['image']}
					<img src="{$input['image']|escape:'html':'UTF-8'}" class="img-thumbnail" />
					<br>
					<input type="checkbox" name="delete_icon" value="1"> {l s='Delete Icon' mod='psmegamenu'}
				{/if}

				<div class="dummyfile input-group">
					<input id="{$input.name|escape:'htmlall':'UTF-8'}" type="file" name="{$input.name|escape:'htmlall':'UTF-8'}" class="hide-file-upload" />
					<span class="input-group-addon"><i class="icon-file"></i></span>
					<input id="{$input.name|escape:'htmlall':'UTF-8'}-name" type="text" class="disabled" name="filename" readonly />
					<span class="input-group-btn">
						<button id="{$input.name|escape:'htmlall':'UTF-8'}-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
							<i class="icon-folder-open"></i> {l s='Choose a file' mod='psmegamenu'}
						</button>
					</span>

				</div>
				<p class="help-block">{l s='Use image icon if no use con Class' mod='psmegamenu'}</p>
				<script>
					$(document).ready(function(){
						$('#{$input.name|escape:'htmlall':'UTF-8'}-selectbutton').click(function(e){
							$('#{$input.name|escape:'htmlall':'UTF-8'}').trigger('click');
						});
						$('#{$input.name|escape:'htmlall':'UTF-8'}').change(function(e){
							var val = $(this).val();
							var file = val.split(/[\\/]/);
							$('#{$input.name|escape:'htmlall':'UTF-8'}-name').val(file[file.length-1]);
						});
					});
				</script>

			</div>
				
		</div>
	{/if}
	{$smarty.block.parent}
{/block}