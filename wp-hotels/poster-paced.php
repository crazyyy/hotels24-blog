<div class="placed-id">
	<h6 class="after-content-title">Место проведения:</h6>
	<table>
		<tr>
			<td>Где:</td>
			<td><?php the_field('place'); ?></td>
		</tr>
		<tr>
			<td>Когда:</td>
			<td><?php

					$dateformatstring = "d F";
					$unixtimestamp = strtotime(get_field('date'));
					echo date_i18n($dateformatstring, $unixtimestamp);

				?>
			</td>
		</tr>
		<tr>
			<td>Время:</td>
			<td><?php the_field('time'); ?></td>
		</tr>
		<tr>
			<td>Адрес:</td>
			<td><?php the_field('adress'); ?></td>
		</tr>
		<tr>
			<td>Телефон:</td>
			<td><?php the_field('phone'); ?></td>
		</tr>
	</table>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript">
	(function($) {
	function render_map( $el ) {
		var $markers = $el.find('.marker');
		var args = {
			zoom		: 16,
			center		: new google.maps.LatLng(0, 0),
			mapTypeId	: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map( $el[0], args);
		map.markers = [];
		$markers.each(function(){
	    	add_marker( $(this), map );
		});
		center_map( map );
	}
	function add_marker( $marker, map ) {
		var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
		var marker = new google.maps.Marker({
			position	: latlng,
			map			: map
		});
		map.markers.push( marker );
		if( $marker.html() )
		{
			var infowindow = new google.maps.InfoWindow({
				content		: $marker.html()
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open( map, marker );
			});
		}
	}
	function center_map( map ) {
		var bounds = new google.maps.LatLngBounds();
		$.each( map.markers, function( i, marker ){
			var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
			bounds.extend( latlng );
		});
		if( map.markers.length == 1 )
		{
		    map.setCenter( bounds.getCenter() );
		    map.setZoom( 16 );
		}
		else
		{
			map.fitBounds( bounds );
		}
	}
	$(document).ready(function(){
		$('.acf-map').each(function(){
			render_map( $(this) );
		});
	});
	})(jQuery);
	</script>
	<?php 
	$location = get_field('map');

	if( !empty($location) ):
	?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
	</div>
	<?php endif; ?>
</div>
<!-- /.placed-id -->