<!-------------------------------------------------------------------------------------------------------------------------------------->






<?php






$byconsolewooodt_map_locations_array = array();













$byconsolewooodt_multiple_pickup_location_for_map=$get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];






$byconsolewooodt_multiple_delivery_location_for_map=$get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];













$stripped_out_byconsolewooodt_delivery_widget_cookie=stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);






$byconsolewooodt_delivery_widget_cookie_array=json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie,true);






?>













<script type="text/javascript">













<?php 






if($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']=='levering' && $byconsolewooodt_multiple_delivery_location_for_map =='YES')






{






	$byconsolewooodt_delivery_locations_for_map= $get_byc_wooodt_data['byconsolewooodt_delivery_location'];






?>













    var locations = [






	<?php 	






	$delivery_locations_inc= 1;






	foreach( $byconsolewooodt_delivery_locations_for_map as $byconsolewooodt_delivery_locations_for_map_single_key => $byconsolewooodt_delivery_locations_for_map_single_value)		






		{






			






			if($byconsolewooodt_delivery_locations_for_map_single_value['address_latitude'] !='' && $byconsolewooodt_delivery_locations_for_map_single_value['address_longitude']!='')






			{






	?>






      ['<?php echo $byconsolewooodt_delivery_locations_for_map_single_value['location']; ?>', <?php echo $byconsolewooodt_delivery_locations_for_map_single_value['address_latitude']; ?>, <?php echo $byconsolewooodt_delivery_locations_for_map_single_value['address_longitude']; ?>, <?php echo $delivery_locations_inc; ?>],






	 <?php






	 }






	 $delivery_locations_inc ++ ;






	}






	 ?>






    ];






	






	var map = new google.maps.Map(document.getElementById('map'), {






      zoom: 0,






      center: new google.maps.LatLng(<?php echo $byconsolewooodt_delivery_locations_for_map_single_value['address_latitude']; ?>, <?php echo $byconsolewooodt_delivery_locations_for_map_single_value['address_longitude']; ?>),






      mapTypeId: google.maps.MapTypeId.ROADMAP






    });






	






<?php } 




















if($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']=='take_away' && $byconsolewooodt_multiple_pickup_location_for_map=='YES')






{






	$byconsolewooodt_pickup_locations_for_map= $get_byc_wooodt_data['byconsolewooodt_pickup_location'];






?>













    var locations = [






	<?php 	






	$pickup_locations_inc= 1;






	foreach( $byconsolewooodt_pickup_locations_for_map as $byconsolewooodt_pickup_locations_for_map_single_key => $byconsolewooodt_pickup_locations_for_map_single_value)		






		{






			






			if($byconsolewooodt_pickup_locations_for_map_single_value['address_latitude'] !='' && $byconsolewooodt_pickup_locations_for_map_single_value['address_longitude']!='')






			{






	?>






      ['<?php echo $byconsolewooodt_pickup_locations_for_map_single_value['location']; ?>', <?php echo $byconsolewooodt_pickup_locations_for_map_single_value['address_latitude']; ?>, <?php echo $byconsolewooodt_pickup_locations_for_map_single_value['address_longitude']; ?>, <?php echo $pickup_locations_inc; ?>],






	 <?php






	 }






	 $pickup_locations_inc ++ ;






	}






	 ?>






    ];






	






	var map = new google.maps.Map(document.getElementById('map'), {






      zoom: 2,






      center: new google.maps.LatLng(<?php echo $byconsolewooodt_pickup_locations_for_map_single_value['address_latitude']; ?>, <?php echo $byconsolewooodt_pickup_locations_for_map_single_value['address_longitude']; ?>),






      mapTypeId: google.maps.MapTypeId.ROADMAP






    });






	






	






<?php } ?>	













jQuery(document).ready(function(){	






	<?php






	$pickup_location_array_val = array();






		 $byconsolewooodt_pickup_locations_for_map= $get_byc_wooodt_data['byconsolewooodt_pickup_location'];






		 













				$pickup_locations_inc= 1;






				foreach( $byconsolewooodt_pickup_locations_for_map as $byconsolewooodt_pickup_locations_for_map_single_key => $byconsolewooodt_pickup_locations_for_map_single_value)		






					{






						






						if($byconsolewooodt_pickup_locations_for_map_single_value['address_latitude'] !='' && $byconsolewooodt_pickup_locations_for_map_single_value['address_longitude']!='')






						{






				






				  $pickup_location_array_val[] = "['".$byconsolewooodt_pickup_locations_for_map_single_value['location']."',". $byconsolewooodt_pickup_locations_for_map_single_value['address_latitude'] . ",". $byconsolewooodt_pickup_locations_for_map_single_value['address_longitude'] . ",". $pickup_locations_inc .'],';






				 






				 }






				 $pickup_locations_inc ++ ;






				}






				






	?>






	






	//alert(<?php //print_r($pickup_location_array_val);?>);






	jQuery(document).on('change','#byconsolewooodt_pickup_location',function(){






		/* Do not drag on mobile. */






			






			var byconsolewooodt_pickup_location_val = jQuery('#byconsolewooodt_pickup_location').val();






					//alert(byconsolewooodt_pickup_location_val);






			if(byconsolewooodt_pickup_location_val == '')






			{






								






				//console.log(<?php //print_r($location_array_val);?>);






	






				var locations = [






					<?php 






						foreach($pickup_location_array_val as $pickup_location_array_single_key => $pickup_location_array_single_val ) 






						{






							echo $pickup_location_array_single_val; 






						}






					?>				






				];






		






		var map = new google.maps.Map(document.getElementById('map'), {






		  zoom: 0,






		  <?php






			foreach( $byconsolewooodt_pickup_locations_for_map as $byconsolewooodt_pickup_locations_for_map_single_key => $byconsolewooodt_pickup_locations_for_map_single_value)		






					{






						






					}






		  ?>






		  center: new google.maps.LatLng(<?php echo $byconsolewooodt_pickup_locations_for_map_single_value['address_latitude'];?>, <?php echo $byconsolewooodt_pickup_locations_for_map_single_value['address_longitude'];?>),






		  mapTypeId: google.maps.MapTypeId.ROADMAP






		});






		






		






		var infowindow = new google.maps.InfoWindow();






	






		var marker, i;






	






		for (i = 0; i < locations.length; i++) {  






		  marker = new google.maps.Marker({






			id:i,






			position: new google.maps.LatLng(locations[i][1], locations[i][2]),






			map: map






		  });






	






		  google.maps.event.addListener(marker, 'click', (function(marker, i) {






			  






			return function() {






				//alert("Yes..");






				var map_pick_latitude =  locations[i][2];






				var map_pick_longitude = locations[i][1];






					






				//alert(map_pick_latitude);






				//alert(map_pick_longitude);






				






				 if(jQuery.inArray(map_pick_latitude, pickup_location_lat)) {






				






					var natched_location_index_lat=pickup_location_long.indexOf(map_pick_longitude);






						//alert('Matched location index(lat): '+natched_location_index_lat);






						






					if(jQuery.inArray(map_pick_longitude, pickup_location_long)) {






					






					var natched_location_index=pickup_location_long.indexOf(map_pick_longitude);






					 jQuery('#byconsolewooodt_pickup_location option:eq('+natched_location_index+')').attr('selected','selected');






					 






					 }






				else { }






				






			} else {






				






			}






					






			  //infowindow.setContent(locations[i][0]+" ID="+marker.id);






			  infowindow.setContent(locations[i][0]);






			  infowindow.open(map, marker);






			  






			}






			






			






		  })(marker, i));






		}






		






				






			}






			else






			{






				






				var pickup_location_lat_val = pickup_location_lat[byconsolewooodt_pickup_location_val];






				






				var pickup_location_long_val = pickup_location_long[byconsolewooodt_pickup_location_val];






				






				






				






				//alert('pickup_location_lat_val:- '+ pickup_location_lat_val + 'pickup_location_long_val: -- ' + pickup_location_long_val);






				






				 var locations = [






				   ['Coogee Beach', pickup_location_lat_val, pickup_location_long_val, 5]






				 ];






				






					






				  var map = new google.maps.Map(document.getElementById('map'), {






				  zoom: 10,






				  center: new google.maps.LatLng(pickup_location_lat_val, pickup_location_long_val),






				  mapTypeId: google.maps.MapTypeId.ROADMAP






				});






			}






			






			for (i = 0; i < locations.length; i++) {  






		  marker = new google.maps.Marker({






			id:i,






			position: new google.maps.LatLng(locations[i][1], locations[i][2]),






			map: map






		  });






	






		  google.maps.event.addListener(marker, 'click', (function(marker, i) {






			  






			return function() {






				//alert("Yes..");






				var map_pick_latitude =  locations[i][1];






				var map_pick_longitude = locations[i][2];






					






				//alert(map_pick_latitude);






				//alert(map_pick_longitude);






					






					






					 if(jQuery.inArray(map_pick_latitude, pickup_location_lat)) {






				






					var natched_location_index_lat=pickup_location_long.indexOf(map_pick_longitude);






						//alert('Matched location index(lat): '+natched_location_index_lat);






						






					if(jQuery.inArray(map_pick_longitude, pickup_location_long)) {






					






					var natched_location_index=pickup_location_long.indexOf(map_pick_longitude);






					 jQuery('#byconsolewooodt_pickup_location option:eq('+natched_location_index+')').attr('selected','selected');






					 






					 }






				else { }






				






			} else {






				






			}






			  //infowindow.setContent(locations[i][0]+" ID="+marker.id);






			  infowindow.setContent(locations[i][0]);






			  infowindow.open(map, marker);






			  






			}






			






			






		  })(marker, i));






		}






			






	});






	






	






	






	<?php






	$delivery_location_array_val = array();






		 $byconsolewooodt_delivery_locations_for_map= $get_byc_wooodt_data['byconsolewooodt_delivery_location'];






		 













				$delivery_locations_inc= 1;






				foreach( $byconsolewooodt_delivery_locations_for_map as $byconsolewooodt_delivery_locations_for_map_single_key => $byconsolewooodt_delivery_locations_for_map_single_value)		






					{






						






						if($byconsolewooodt_delivery_locations_for_map_single_value['address_latitude'] !='' && $byconsolewooodt_delivery_locations_for_map_single_value['address_longitude']!='')






						{






				






				  $delivery_location_array_val[] = "['".$byconsolewooodt_delivery_locations_for_map_single_value['location']."',". $byconsolewooodt_delivery_locations_for_map_single_value['address_latitude'] . ",". $byconsolewooodt_delivery_locations_for_map_single_value['address_longitude'] . ",". $delivery_locations_inc .'],';






				 






				 }






				 $delivery_locations_inc ++ ;






				}






				






	?>






	






	






	






	jQuery(document).on('change','#byconsolewooodt_delivery_location',function(){






		/* Do not drag on mobile. */






			






			var byconsolewooodt_delivery_location_val = jQuery('#byconsolewooodt_delivery_location').val();






					//alert(byconsolewooodt_delivery_location_val);






			if(byconsolewooodt_delivery_location_val == '')






			{






								






				//console.log(<?php //print_r($location_array_val);?>);






	






				var locations = [






					<?php 






						foreach($delivery_location_array_val as $delivery_location_array_single_key => $delivery_location_array_single_val ) 






						{






							echo $delivery_location_array_single_val; 






						}






					?>				






				];






		






		var map = new google.maps.Map(document.getElementById('map'), {






		  zoom: 0,		  






		  <?php 






		  	foreach( $byconsolewooodt_delivery_locations_for_map as $byconsolewooodt_delivery_locations_for_map_single_key => $byconsolewooodt_delivery_locations_for_map_single_value)		






			{






				






			}






		  ?>






		  center: new google.maps.LatLng(<?php echo $byconsolewooodt_delivery_locations_for_map_single_value['address_latitude'];?>, <?php echo $byconsolewooodt_delivery_locations_for_map_single_value['address_longitude'];?>),






		  mapTypeId: google.maps.MapTypeId.ROADMAP






		});






		






		






		var infowindow = new google.maps.InfoWindow();






	






		var marker, i;






	






		for (i = 0; i < locations.length; i++) {  






		  marker = new google.maps.Marker({






			id:i,






			position: new google.maps.LatLng(locations[i][1], locations[i][2]),






			map: map






		  });






	






		  google.maps.event.addListener(marker, 'click', (function(marker, i) {






			  






			return function() {






				//alert("Yes..");






				var map_pick_latitude =  locations[i][2];






				var map_pick_longitude = locations[i][1];






					






				//alert(map_pick_latitude);






				//alert(map_pick_longitude);






				






				if(jQuery.inArray(map_pick_latitude, delivery_location_lat)) {






				






					var natched_location_index_lat=delivery_location_long.indexOf(map_pick_longitude);






						//alert('Matched location index(lat): '+natched_location_index_lat);






						






					if(jQuery.inArray(map_pick_longitude, delivery_location_long)) {






					






					var natched_location_index=delivery_location_long.indexOf(map_pick_longitude);






					 jQuery('#byconsolewooodt_delivery_location option:eq('+natched_location_index+')').attr('selected','selected');






					 






					 }






				else { }






				






			} else {






				






			}






					






			  //infowindow.setContent(locations[i][0]+" ID="+marker.id);






			  infowindow.setContent(locations[i][0]);






			  infowindow.open(map, marker);






			  






			}






			






			






		  })(marker, i));






		}






		






				






			}






			else






			{






				






				var delivery_location_lat_val = delivery_location_lat[byconsolewooodt_delivery_location_val];






				






				var delivery_location_long_val = delivery_location_long[byconsolewooodt_delivery_location_val];






				






				//alert('delivery_location_lat_val:- '+ delivery_location_lat_val + 'delivery_location_long_val: -- ' + delivery_location_long_val);






				






				 var locations = [






				   ['Coogee Beach', delivery_location_lat_val, delivery_location_long_val, 5]






				 ];






				






					






				  var map = new google.maps.Map(document.getElementById('map'), {






				  zoom: 10,






				  center: new google.maps.LatLng(delivery_location_lat_val, delivery_location_long_val),






				  mapTypeId: google.maps.MapTypeId.ROADMAP






				});






			}






			






			for (i = 0; i < locations.length; i++) {  






		  marker = new google.maps.Marker({






			id:i,






			position: new google.maps.LatLng(locations[i][1], locations[i][2]),






			map: map






		  });






	






		  google.maps.event.addListener(marker, 'click', (function(marker, i) {






			  






			return function() {






				//alert("Yes..");






				var map_pick_latitude =  locations[i][1];






				var map_pick_longitude = locations[i][2];






					






				//alert(map_pick_latitude);






				//alert(map_pick_longitude);






				






				if(jQuery.inArray(map_pick_latitude, delivery_location_lat)) {






				






					var natched_location_index_lat=delivery_location_long.indexOf(map_pick_longitude);






						//alert('Matched location index(lat): '+natched_location_index_lat);






						






					if(jQuery.inArray(map_pick_longitude, delivery_location_long)) {






					






					var natched_location_index=delivery_location_long.indexOf(map_pick_longitude);






					 jQuery('#byconsolewooodt_delivery_location option:eq('+natched_location_index+')').attr('selected','selected');






					 






					 }






				else { }






				






			} else {






				






			}






					






			  //infowindow.setContent(locations[i][0]+" ID="+marker.id);






			  infowindow.setContent(locations[i][0]);






			  infowindow.open(map, marker);






			  






			}






			






			






		  })(marker, i));






		}






			






	});






	






	






	






});













    var infowindow = new google.maps.InfoWindow();













    var marker, i;













    for (i = 0; i < locations.length; i++) {  






      marker = new google.maps.Marker({






        id:i,






        position: new google.maps.LatLng(locations[i][1], locations[i][2]),






        map: map






      });













      google.maps.event.addListener(marker, 'click', (function(marker, i) {






		  






        return function() {






			//alert("Yes..");






			var map_pick_latitude =  locations[i][1];






			var map_pick_longitude = locations[i][2];






				






			//alert(map_pick_latitude);






			//alert(map_pick_longitude);






			






			






			






			






			






					//alert('Matched location index: '+natched_location_index);













<?php






if($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']=='levering' && $byconsolewooodt_multiple_delivery_location_for_map =='YES'){






?>






					






			console.log('delivery_location_lat');






			console.log(delivery_location_lat);






			console.log('delivery_location_long');






			console.log(delivery_location_long);






					






					if(jQuery.inArray(map_pick_latitude, delivery_location_lat)) {






				






					var natched_location_index_lat=delivery_location_long.indexOf(map_pick_longitude);






						alert('Matched location index(lat): '+natched_location_index_lat);






						






					if(jQuery.inArray(map_pick_longitude, delivery_location_long)) {






					






					var natched_location_index=delivery_location_long.indexOf(map_pick_longitude);






					 jQuery('#byconsolewooodt_delivery_location option:eq('+natched_location_index+')').attr('selected','selected');






					 






					 }






				else { }






				






			} else {






				






			}






<?php }?>					  













				






<?php 






if($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']=='take_away' && $byconsolewooodt_multiple_pickup_location_for_map=='YES'){






?>		 






			console.log('pickup_location_lat');






			console.log(pickup_location_lat);






			console.log('pickup_location_long');






			console.log(pickup_location_long);






			






					if(jQuery.inArray(map_pick_latitude, pickup_location_lat)) {






				






					var natched_location_index_lat=pickup_location_long.indexOf(map_pick_longitude);






						alert('Matched location index(lat): '+natched_location_index_lat);






						






					if(jQuery.inArray(map_pick_longitude, pickup_location_long)) {






					






					var natched_location_index=pickup_location_long.indexOf(map_pick_longitude);






					 jQuery('#byconsolewooodt_pickup_location option:eq('+natched_location_index+')').attr('selected','selected');






					 






					 }






				else { }






				






			} else {






				






			}






			






<?php } ?>






			






				






          //infowindow.setContent(locations[i][0]+" ID="+marker.id);






		  infowindow.setContent(locations[i][0]);






          infowindow.open(map, marker);






		  






        }






		






		






      })(marker, i));






    }






  </script>