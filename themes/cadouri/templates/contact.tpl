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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='page.tpl'}

{block name='page_header_container'}
    <div class="row">
        <div class="col-xs-12">
            <iframe width="100%" height="550" frameborder="0" src="https://map.md/ru/map/46.988308965767445/28.858509063720703/19/5c779c90de98ee0015df2853?q=cadouri.md&embed=1"></iframe>
        </div>
    </div>
    <h1 class="page_title">
        {l s='Contact us' d='Shop.Theme.Global'}
    </h1>
{/block}

{block name='right_column'}{/block}

{block name='page_content'}
    <div class="row">
        <div class="col-md-12">
            <h2>{l s='Address, phone number and email' d='Shop.Theme.Global'}</h2>
            <ul class="nav">
                <li class="nav-item contactAdress">

                    <div class="adress">
                        <i class="icon-geo"></i>
                        <span class="title">{l s='Address' d='Shop.Theme.Global'}:</span> {l s='bd. Decebal 139' d='Shop.Theme.Global'}
                    </div>
                </li>
                <li class="nav-item contactPhone">
                    <div class="phone">
                        <i class="icon-phone"></i>
                        <span class="title">{l s='Phone' d='Shop.Theme.Global'}:</span> {l s='+373 796 46 609' d='Shop.Theme.Global'}
                    </div>
                </li>
                <li class="nav-item contactEmail">
                    <div class="email">
                        <i class="icon-mail"></i>
                        <span class="title">{l s='Email' d='Shop.Theme.Global'}:</span>{l s='olga.pencencova@gmail.com'}
                    </div>
                </li>
            </ul>
            <br>
            <br>
            <h2>{l s='Working hours' d='Shop.Theme.Global'}</h2>
            <div id="working-schedule">
                {l s='Monday: 09:00AM - 07:00PM;Tuesday: 09:00AM - 07:00PM; Wednesday: 09:00AM - 07:00PM; Thursday: 09:00AM - 07:00PM; Friday: 09:00AM - 07:00PM; Saturday: 10:00AM - 04:00PM; Sanday: 10:00AM - 04:00PM;' d='Shop.Theme.Global'}
            </div>
        </div>
    </div>
{/block}
