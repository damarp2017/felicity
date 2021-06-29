@extends('backoffice.layout.app')

@push('styles')
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('assets/adminlte/plugins/toastr/toastr.min.css') }}">
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">



@endpush

@push('scripts')
<!-- Toastr -->
<script src="{{ asset('assets/adminlte/plugins/toastr/toastr.min.js') }}"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>



@if ($message = Session::get('success'))
<script>
	message = {!! json_encode($message) !!}
    $(function() {
        toastr.success(message);
    });
</script>
@endif


<script>
	const defaultLocation = [106.82614247655886, -6.177229876413122]
	 mapboxgl.accessToken = 'pk.eyJ1IjoiaGVsZmFuemFuYW5kYSIsImEiOiJja2FkaDdncnUwNnB4MnhxdDg1OXFoaHcyIn0.mCzqYrhyGh1PYqt2TUhgTQ';
    let map = new mapboxgl.Map({
        container: 'map',
        center : defaultLocation,
        zoom: 11.15,
        style: 'mapbox://styles/mapbox/streets-v11'
    });

	 //location user
	 let geoLocate = new mapboxgl.GeolocateControl();
    map.addControl(geoLocate, 'bottom-right');
    geoLocate.on('geolocate', function(e) {
        map.flyTo({
            center:[e.coords.longitude, e.coords.latitude], 
            zoom:16 //set zoom 
        });
    });

    //search
    let geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        marker: false,
        mapboxgl: mapboxgl,
        flyTo: {
            maxZoom: 16,
        }
    });
    map.addControl(geocoder, 'top-left');


    //navigasi control
    map.addControl(new mapboxgl.NavigationControl())

    //map click
    map.on('click', (e) => {
        const lng = e.lngLat.lng
        const lat = e.lngLat.lat
        showMarker(lng, lat);
       setLatLngView(lng, lat)
    })

    let markers = [];
    let marker = new mapboxgl.Marker({draggable: true});
    
    //show marker
    function showMarker(lng, lat){
        clearMarkers()
        marker.setLngLat([lng, lat]).addTo(map);
        markers.push(marker);
    }

    // marker draggable
    function onDragEnd() {
        let lngLat = marker.getLngLat();
        setLatLngView(lngLat.lng, lngLat.lat)
    }
    marker.on('dragend', onDragEnd);

    //set lnglat
    function setLatLngView(lng, lat){
        $('#lng').val(lng)
        $('#lat').val(lat)
    }

    //remove marker
    function clearMarkers(){
        markers.forEach((marker) => marker.remove());
        markers = [];
    }


</script>

@endpush

@section('main')
<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create Location</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="col-md-12">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="card card-success">
				<div class="card-header">
					<h3 class="card-title">Create Location</h3>
				</div>
				<form action="{{ route('backoffice.static.location.create') }}" method="post">
					@csrf
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="city">City</label>
									<input type="text" class="form-control" id="city" name="city" required
										placeholder="Enter city" value="{{ old('city') }}">
								</div>
								<div class="form-group">
									<label for="address">Address</label>
									<textarea name="address" id="address" class="form-control" cols="30" rows="10"
										placeholder="Enter Address" required>{{ old('address') }}</textarea>
								</div>
							</div>
							<div class="col-md-8">
								<div id="map" style="height: 60vh;"></div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="lat">Latitude</label>
											<input type="text" class="form-control" readonly id="lat" name="lat"
												value="{{ old('lat') }}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lng">Longitude</label>
											<input type="text" class="form-control" readonly id="lng" name="lng"
												value="{{ old('lng') }}">
										</div>
									</div>
								</div>

							</div>
						</div>



					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success">Create</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>
@endsection