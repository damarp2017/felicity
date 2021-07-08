@extends('layouts.app')
@push('styles')
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
	<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">
@endpush
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative ">
	@include('layouts.__navigation')
        @include('layouts.__wave')
		<div class="mx-4 md:app-container 2xl:px-40">
			<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
			<div class="flex flex-col h-96 md:h-screen justify-center items-center text-center">
				<!-- <div class="block md:hidden text-lg text-white uppercase">We design the</div> -->

				<h2 class="mb-3 md:mb--15 font-semibold text-5xl md:font--size-100 text-white">Say hello 👋 </h2>
				<!-- <div class="text-base md:font--size-20 text-white opacity-50 w-9/12 md:w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div> -->
			</div>
		</div>
	</header>

	<section class="tag bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container 2xl:px-40">
			<div class="mb-10 md:mb--38">
				<!-- <div class="mb-3 md:mb--15 font-semibold text-4xl md:font--size-65">Say hello </div> -->
				<!-- <div class=" w-full md:w-9/12 mb-8 text-base md:font--size-17 font--poppins"
				style="line-height: 192.8%;
				letter-spacing: 0.02em;
				color: rgba(55, 55, 55, 0.46);
				opacity: 0.8;">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div> -->
				<div class="">
					<div class=" flex  cursor-pointer md:items-start">
						@foreach ($locations as $loc)
							<button data-loc="{{ json_encode($loc) }}" class="hover:zoom w-32 h-12 md:w--166 md:h--48 md:mr--22 md:font--size-16 bg-gray-200 text-white rounded-full city focus:outline-none">{{ $loc->city }}</button>
						@endforeach
					</div>
				</div>
			</div>

			<div class="flex flex-col md:flex-row items-center gap-y-10 md:gap-y-0 gap-x-0 md:gap-x-14 mb-10 md:mb--53">
				<div class="w-full md:w-auto">
					<div class="text-md md:font--size-14 uppercase text-gray-400 font--gilroy-md">ADDRESS</div>
					<div class="text-md md:font--size-19 text-gray-500 address"></div>
				</div>
				<div class="w-full md:w-auto">
					<div class="text-md md:font--size-14 uppercase text-gray-400 font--gilroy-md">PHONE</div>
					<div class="text-md md:font--size-19 text-gray-500">{{ $data ? $data->phone : '' }}</div>
				</div>
				<div class="w-full md:w-auto">
					<div class="text-md md:font--size-14 uppercase text-gray-400 font--gilroy-md">EMAIL</div>
					<div class="text-md md:font--size-19 text-gray-500">{{ $data ? $data->email : '' }}</div>
				</div>
			</div>

			<div>
				<div class="block md:flex items-stretch gap-x-4">
					<div class="block md:hidden w-full md:w-1/2 mb-10">
						{{-- <a href="https://goo.gl/maps/JCB8QrJizt94ThB58" target="_blank">


						</a> --}}
						<div class="text--gray text-sm" style="opacity: .5;">*Click to open maps</div>
					</div>
					<div class="w-full md:w-1/2">
						<form method="post" action="{{ route('contact.insert') }}">
                            @csrf
							<div class="mb-4 ">
								<input type="text" class="text--gray-dark form--contact-us w-full p-3 md:py--19 md:px--31 bg-gray-100 md:font--size-19 focus:outline-none" name="email" placeholder="Email Address" required="">
							</div>
							<div class="mb-4 ">
								<input type="text" class="text--gray-dark form--contact-us w-full p-3 md:py--19 md:px--31 bg-gray-100 md:font--size-19 focus:outline-none" name="name" placeholder="Full Name" required="">
							</div>
							<div class="mb-4 ">
								<input type="text" class="text--gray-dark form--contact-us w-full p-3 md:py--19 md:px--31 bg-gray-100 md:font--size-19 focus:outline-none" name="phone" placeholder="Phone Number" required="">
							</div>
							<div class="mb-4 ">
								<input type="text" class="text--gray-dark form--contact-us w-full p-3 md:py--19 md:px--31 bg-gray-100 md:font--size-19 focus:outline-none" name="reason" placeholder="Reason to contact" required="">
							</div>

							<button class="w-full py-3 md:py--16 text-white text-center font--gilroy-md md:font--size-21 bg--blue hover:zoom" style="border-radius: 19px" type="submit">Send</button>
						</form>
					</div>
					<div class="hidden md:block w-full md:w-1/2 ">
						<div style="height: 60vh; width: auto" class="bg-gray-700">
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12365.932184510551!2d75.75489122369524!3d26.85239652451462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db51e9b46a8d9%3A0xe051803a13e605c7!2sMansarover%20Plaza!5e1!3m2!1sid!2sid!4v1625647266345!5m2!1sid!2sid" width="590" height="400" allowfullscreen></iframe> --}}
							{{-- <iframe id="maps" src="https://maps.google.com/maps?q=35.856737, 10.606619&z=15&output=embed" width="590" height="400" allowfullscreen frameborder="0" style="border:0"></iframe> --}}
								<iframe id="maps" width="590" height="400" allowfullscreen frameborder="0" style="border:0"></iframe>
                        </div>

						<!-- <div class="text--gray text-sm">*Click to view maps</div> -->
					</div>
				</div>
			</div>

		</div>
	</section>
@endsection
@push('scripts')
<script type="text/javascript">

	$(document).ready(function () {
		let location = $('.city').data('loc')
		$('.address').text(location.address)
		$('.city').first().addClass('bg--green').removeClass('bg-gray-200')

		const lng = location.lng
        const lat = location.lat
		$('#maps').attr('src', 'https://maps.google.com/maps?q='+lat+', '+lng+'&z=15&output=embed')

        //showMarker(lng, lat)
	})

	$(document).on('click', '.city', function (e) {
		e.preventDefault()
		let location = $(this).data('loc')
		$('.address').text(location.address)

		const lng = location.lng
        const lat = location.lat
		$('#maps').attr('src', 'https://maps.google.com/maps?q='+lat+', '+lng+'&z=15&output=embed')
		if($(this).hasClass('bg--green')){
			$('.city').removeClass('bg--green').addClass('bg-gray-200')
		}else{
			$('.city').removeClass('bg--green').addClass('bg-gray-200')
			$(this).addClass('bg--green')
		}
	})

</script>
@endpush
