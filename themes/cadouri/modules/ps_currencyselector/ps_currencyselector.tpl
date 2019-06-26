{**
 * 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
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
*  @copyright  2007-2017 PrestaShop SA
*  @license    https://opensource.org/licenses/AFL-3.0  Academic Free License 3.0 (AFL-3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="currency-selector dropdown js-dropdown float-xs-left">
    <button data-target="#" data-toggle="dropdown" class="btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="{l s='Currency dropdown' d='Shop.Theme.Global'}">
        {if $current_currency.iso_code != 'MDL'}{$current_currency.sign} {/if}{$current_currency.iso_code}
        <i class="icon-schevron-down"></i>
    </button>
    <ul class="dropdown-menu">
        {foreach from=$currencies item=currency}
            <li {if $currency.current} class="current" {/if}>
                <a title="{$currency.name}" rel="nofollow" href="{$currency.url}" class="dropdown-item">
                    {if $currency.iso_code != 'MDL'}{$currency.sign} {/if}{$currency.iso_code}
                </a>
            </li>
        {/foreach}
    </ul>
</div>
