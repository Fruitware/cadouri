/******************************************************
 * @package Pts Prestashop Theme Framework for Prestashop 1.7.x
 * @version 2.0
 * @author http://www.prestabrain.com, http://www.PrestaBrain.com
 * @copyright	Copyright (C) Steptember 2013 prestabrain.com <@emai:prestabrain@gmail.com>.All rights reserved.
 * @license		GNU General Public License version 2
*******************************************************/

(function($) {
	$.fn.PavMegaMenuList = function(opts) {
		// default configuration
		var config = $.extend({}, {
			action:null, 
			addnew:null, 
			confirm_del:'Are you sure delete this?'
		}, opts);

		function checkInputHanlder(){
			var _updateMenuType = function(){
				$(".menu-type-group").parent().parent().hide();
				$("[for^=content_text_]").parent().hide();

				if( $("#menu_type").val() =='html' ){
					$("#content_text_1").parent().parent().show();
				}else {
					$("#"+$("#menu_type").val()+"_type").parent().parent().show();
					$("#content_text_1").parent().parent().hide();
				}
			};
			_updateMenuType(); 
			$("#menu_type").change(  _updateMenuType );

			var _updateSubmenuType = function(){
				if( $("#type_submenu").val() =='html' ){
					$("#submenu_content_text_1").parent().parent().show();
				}else{
					$("#submenu_content_text_1").parent().parent().hide();
				}
			};
			_updateSubmenuType();
			$("#type_submenu").change(  _updateSubmenuType );

		}

		function manageTreeMenu(){
			if($('ol').hasClass("sortable")){
				$('ol.sortable').nestedSortable({
						forcePlaceholderSize: true,
						handle: 'div',
						helper:	'clone',
						items: 'li',
						opacity: .6,
						placeholder: 'placeholder',
						revert: 250,
						tabSize: 25,
						tolerance: 'pointer',
						toleranceElement: '> div',
						maxLevels: 4,

						isTree: true,
						expandOnHover: 700,
						startCollapsed: true
					});
				
				$('#serialize, #serialize-tree').click(function(){
					var serialized = $('ol.sortable').nestedSortable('serialize');
				 	var text = $(this).val();
				 	var $this  = $(this);
				 	$(this).val( $(this).data('loading-text') );
					$.ajax({
						type: 'POST',
						url: config.action+"&doupdatepos=1&rand="+Math.random(),
						data : serialized+'&updatePosition=1' 
					}).done( function () {
						 $this.val( text );
					} );
				});
				$('#addcategory').click(function(){
					location.href=config.addnew;
				});
			}	
		}
	 	/**
	 	 * initialize every element
	 	 */
		this.each(function() {  
	 		$(".quickedit",this).click( function(){  
	 			location.href=config.action+"&id_psmegamenu="+$(this).attr('rel').replace("id_","");
	 		} );

	 		$(".quickdel",this).click( function(){  
	 			if( confirm(config.confirm_del) ){
	 				location.href=config.action+"&dodel=1&id_psmegamenu="+$(this).attr('rel').replace("id_","");
	 			}
	 			
	 		} );

	 		manageTreeMenu();
	 		checkInputHanlder();




		});

		return this;
	};
	
})(jQuery);


jQuery(document).ready(function(){
	
 	$(".pts-modal , .psmegamenu .edit, .pts-modal-action").fancybox({
	 	'type':'iframe',
	 	'width':980,
	 	'height':500,
	 	afterLoad:function(   ){
	 		if( $('body',$('.fancybox-iframe').contents()).find("#main").length  ){  
		 		$('body',$('.fancybox-iframe').contents()).find("#header").hide();
		 		$('body',$('.fancybox-iframe').contents()).find("#footer").hide();
	 		}else { 
	 			 
	 		}
	 	},
                afterClose: function() {
                    window.location = window.location.href;
                }
	});
 	
 	$("#widgetds a.btn").fancybox( {'type':'iframe'} );	
});


jQuery(document).ready(function(){
    if($(".img-thumbnail img").length){
	$(".img-thumbnail").append('<a class="del-img btn color_danger" href="javascript:voice(0)"><i class="icon-remove-sign"></i> delete image</a>');
    }
    $(".del-img").click(function(){
        if (confirm('Are you sure to delete this image?')) {
            $(this).parent().parent().html('<input type="hidden" value="1" name="delete_icon"/>');
        }
    });
    $(".psmegamenu td").attr('onclick','').unbind('click');
    if(String(location.hash) == "#widgets") $('a[href="#widgets"]').click();
});