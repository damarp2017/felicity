@extends('backoffice.layout.app')

@push('styles')
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">

@endpush

@push('scripts')
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>

<script>
	const defaultLocation = ['{{ $location->lng }}', '{{ $location->lat }}']
    mapboxgl.accessToken = 'pk.eyJ1IjoiaGVsZmFuemFuYW5kYSIsImEiOiJja2FkaDdncnUwNnB4MnhxdDg1OXFoaHcyIn0.mCzqYrhyGh1PYqt2TUhgTQ';
    let map = new mapboxgl.Map({
        container: 'map',
        center : defaultLocation,
        zoom: 11.15,
        style: 'mapbox://styles/mapbox/streets-v11'
    });

    map.addControl(new mapboxgl.NavigationControl())

    $(document).ready(function() {
        const lng = '{{ $location->lng }}'
        const lat = '{{ $location->lat }}'
        showMarker(lng, lat)
    })

    let markers = [];
    function showMarker(lng, lat){
        let marker =  new mapboxgl.Marker().setLngLat([lng, lat]).addTo(map);
        markers.push(marker);
    }

</script>


@endpush

@section('main')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>City : {{ $location->city }}</h1>
                </div>
                <div class="col-sm-6">
                    {{-- <ol class="breadcrumb float-sm-right">
						<a href="{{ route('backoffice.static.location.create') }}" class="btn btn-primary">Create Location</a>
                    </ol> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="col-md-12">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">City : {{ $location->city }}</h3>
					
                </div>
				<div class="card-body">
					<p>Address : {{ $location->address }}</p>
					<div id="map" style="height: 60vh"></div>
				</div>
                
            </div>
        </div>
    </section>
</div>

@endsection