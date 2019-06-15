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
<div id="{$mapid|escape:'html':'UTF-8'}" style="width:{$width|escape:'html':'UTF-8'}; height:{$height|escape:'html':'UTF-8'};"></div>


<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&amp;key={$api_key|escape:'html':'UTF-8'}"></script>


<script type="text/javascript">
	function initialize()
	{
	  var mapProp = {
	    center: new google.maps.LatLng({$latitude|escape:'html':'UTF-8'},{$longitude|escape:'html':'UTF-8'}),
	    zoom:{$zoom|escape:'html':'UTF-8'},
	    mapTypeId: google.maps.MapTypeId.{$map_type|escape:'html':'UTF-8'}
	  };
	  var map = new google.maps.Map(document.getElementById("{$mapid|escape:'html':'UTF-8'}"),mapProp);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>