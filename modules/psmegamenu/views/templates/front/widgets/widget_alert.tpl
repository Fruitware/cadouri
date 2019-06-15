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
{if isset($html)&& !empty($html)}
<div class="alert {$alert_type|escape:'htmlall':'UTF-8'}">
	{$html}{* HTML, can not escape *}
</div>
{/if}