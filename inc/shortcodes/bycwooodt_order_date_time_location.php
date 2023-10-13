<?php






add_shortcode('WooODT_Extended_display_order_date_time_location','function_WooODT_Extended_display_order_date_time_location');













function function_WooODT_Extended_display_order_date_time_location($atts, $content = null){













if(get_post_meta( $atts["order_id"], 'byconsolewooodt_delivery_type', true )=='take_away'){













	$order_delivery_type='Pickup';













	













	$pickup_location=get_post_meta( $atts[order_id], 'byconsolewooodt_pickup_location', true );













	













	$pickup_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];













	













	if(!empty($pickup_location)){













	




















	$pickup_location_index=get_post_meta( $atts[order_id], 'byconsolewooodt_pickup_location', true );













	













	$pickup_location_name=$pickup_location_get_option_array_value[$pickup_location_index]['location'];













	













	$location_string='<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_pickup_location_lable'],'ByConsoleWooODTExtended').':</strong> ' . $pickup_location_name . '</p>';













	













	}else{













	













	$location_string=__('<p>No pickup location was selected</p>','ByConsoleWooODTExtended');













	













	}













	













	$productdeliverydate = new DateTime( get_post_meta( $atts[order_id], 'byconsolewooodt_delivery_date', true ));













	$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];













	$delivery_time_val = get_post_meta( $atts[order_id], 'byconsolewooodt_delivery_time', true );













	if($delivery_time_val == 'as_early_as_possible')













	{













		$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];













	}













	else













	{













		$delivery_time_val_content = get_post_meta( $atts[order_id], 'byconsolewooodt_delivery_time', true );













	}













	













	$delivery_pickup_date = '<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_pickup_date_lable'],'ByConsoleWooODTExtended').':</strong> ' . date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';













	$delivery_pickup_time = '<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_pickup_time_lable'],'ByConsoleWooODTExtended').':</strong> ' . $delivery_time_val_content . '</p>';













	













}













if(get_post_meta( $atts["order_id"], 'byconsolewooodt_delivery_type', true )=='levering'){













	$order_delivery_type='Delivery';













	













	$delivery_location=get_post_meta( $atts["order_id"], 'byconsolewooodt_delivery_location', true );













	













	$delivery_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];













	













	if(!empty($delivery_location)){













	













	$delivery_location_index=get_post_meta( $atts["order_id"], 'byconsolewooodt_delivery_location', true );













	













	$delivery_location_name=$delivery_location_get_option_array_value[$delivery_location_index]['location'];













	













	$location_string='<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_delivery_location_lable'],'ByConsoleWooODTExtended').':</strong> ' . $delivery_location_name . '</p>';













	













	}else{













	













	$location_string=__('<p>No delivery loaction was selected</p>','ByConsoleWooODTExtended');













	













	}













	













	$productdeliverydate = new DateTime( get_post_meta( $atts["order_id"], 'byconsolewooodt_delivery_date', true ));













	$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];













	$delivery_time_val = get_post_meta( $atts["order_id"], 'byconsolewooodt_delivery_time', true );













	if($delivery_time_val == 'as_early_as_possible')













	{













		$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];













	}













	else













	{













		$delivery_time_val_content = get_post_meta( $atts["order_id"], 'byconsolewooodt_delivery_time', true );













	}






	$delivery_pickup_date = '<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_delivery_date_lable'],'ByConsoleWooODTExtended').':</strong> ' . date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';













	$delivery_pickup_time = '<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'],'ByConsoleWooODTExtended').':</strong> ' . $delivery_time_val_content . '</p>';













	













}






echo '<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_order_type_lable'],'ByConsoleWooODTExtended').':</strong> ' . $order_delivery_type . '</p>';













echo $location_string;













echo $delivery_pickup_date;













echo $delivery_pickup_time;






}






?>