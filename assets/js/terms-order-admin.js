//(function( $ ) {
	'use strict';

	function tt_terms_order_change_taxonomy(element){
            jQuery('#tt_terms_order_form #cat').val(jQuery("#tt_terms_order_form #cat option:first").val());
            jQuery('#tt_terms_order_form').submit();
    }
	var array_to_object_conversion = function(array){
		var element_object = new Object();
		if(typeof array == "object"){
			for(var i in array){
				var element = array_to_object_conversion(array[i]);
				element_object[i] = element;
			}
		}else {
			element_object = array;
		}
		return element_object;
	}

//})( jQuery );
