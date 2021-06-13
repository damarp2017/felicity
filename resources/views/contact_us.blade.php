@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative ">
	@include('layouts.__navigation')
		<div class="mx-4 md:app-container">
			<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
			<div class="flex flex-col h-96 md:h-screen justify-center items-center text-center">
				<!-- <div class="block md:hidden text-lg text-white uppercase">We design the</div> -->
				
				<h2 class="mb-3 md:mb--15 font-semibold text-4xl md:font--size-65 text-white">Say hello </h2>
				<!-- <div class="text-base md:font--size-20 text-white opacity-50 w-9/12 md:w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div> -->
			</div>
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="mb-10 md:mb--38">
				<!-- <div class="mb-3 md:mb--15 font-semibold text-4xl md:font--size-65">Say hello </div> -->
				<!-- <div class=" w-full md:w-9/12 mb-8 text-base md:font--size-17 font--poppins"
				style="line-height: 192.8%;
				letter-spacing: 0.02em;
				color: rgba(55, 55, 55, 0.46);
				opacity: 0.8;">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div> -->
				<div class="">
					<div class="jaipur flex  cursor-pointer md:items-start">
						<button class="w-32 h-12 md:w--166 md:h--48 md:mr--22 md:font--size-16 bg--green  text-white rounded-full " onclick="jaipur()">Jaipur</button>
						<button class="w-32 h-12 md:w--166 md:h--48 md:mr--22 md:font--size-16 bg-gray-200 text-white rounded-full " onclick="mumbai()">Mumbai</button>
					</div>
					<div class="mumbai flex  cursor-pointer md:items-start" style="display: none;">
						<button class="w-32 h-12 md:w--166 md:h--48 md:mr--22 md:font--size-16 bg-gray-200  text-white rounded-full " onclick="jaipur()">Jaipur</button>
						<button class="w-32 h-12 md:w--166 md:h--48 md:mr--22 md:font--size-16 bg--green text-white rounded-full " onclick="mumbai()">Mumbai</button>
					</div>
				</div>
			</div>

			<div class="flex flex-col md:flex-row items-center gap-y-10 md:gap-y-0 gap-x-0 md:gap-x-14 mb-10 md:mb--53">
				<div class="w-full md:w-auto">
					<div class="text-md md:font--size-14 uppercase text-gray-400 font--gilroy-md">ADDRESS</div>
					<div class="text-md md:font--size-19 text-gray-500 jaipur">Office 414, Mansarovar Plaza, Madhyam Marg, Mansarovar, Jaipur - 302020 </div>
					<div class="text-md md:font--size-19 text-gray-500 mumbai" style="display: none;">Coming soon</div>
				</div>
				<div class="w-full md:w-auto">
					<div class="text-md md:font--size-14 uppercase text-gray-400 font--gilroy-md">PHONE</div>
					<div class="text-md md:font--size-19 text-gray-500">+91-7738180136</div>
				</div>
				<div class="w-full md:w-auto">
					<div class="text-md md:font--size-14 uppercase text-gray-400 font--gilroy-md">EMAIL</div>
					<div class="text-md md:font--size-19 text-gray-500">hello@felicitymedia.in</div>
				</div>
			</div>

			<div>
				<div class="block md:flex items-stretch gap-x-4">
					<div class="block md:hidden w-full md:w-1/2 mb-10">
						<a href="https://goo.gl/maps/JCB8QrJizt94ThB58" target="_blank"><img class="h-96 w-full object-cover object-center rounded-2xl" src="{{ asset('images/contact_us/maps.jpg') }}" title="Click to open map" alt=""></a>
						<div class="text--gray text-sm" style="opacity: .5;">*Click to open maps</div>
					</div>
					<div class="w-full md:w-1/2">
						<form action="">
							<div class="mb-4 ">
								<input type="text" class="text--gray-dark form--contact-us w-full p-3 md:py--19 md:px--31 bg-gray-100 md:font--size-19 focus:outline-none" placeholder="Email Address">
							</div>
							<div class="mb-4 ">
								<input type="text" class="text--gray-dark form--contact-us w-full p-3 md:py--19 md:px--31 bg-gray-100 md:font--size-19 focus:outline-none" placeholder="Full Name">
							</div>
							<div class="mb-4 ">
								<input type="text" class="text--gray-dark form--contact-us w-full p-3 md:py--19 md:px--31 bg-gray-100 md:font--size-19 focus:outline-none" placeholder="Phone Number">
							</div>
							<div class="mb-4 ">
								<input type="text" class="text--gray-dark form--contact-us w-full p-3 md:py--19 md:px--31 bg-gray-100 md:font--size-19 focus:outline-none" placeholder="Reason to contact">
							</div>
							
							<button class="w-full py-3 md:py--16 text-white text-center font--gilroy-md md:font--size-21 bg--blue" style="border-radius: 19px">Send</button>
						</form>
					</div>
					<div class="hidden md:block w-full md:w-1/2">
						<a href="https://goo.gl/maps/JCB8QrJizt94ThB58" target="_blank"><img class="h-96 w-full object-cover object-center rounded-2xl" src="{{ asset('images/contact_us/maps.jpg') }}" title="Click to open map" alt=""></a>
						<!-- <div class="text--gray text-sm">*Click to view maps</div> -->
					</div>
				</div>
			</div>
			
		</div>
	</section>
@endsection
@push('scripts')
<script type="text/javascript">
	function jaipur(){
		$('.mumbai').hide();
		$('.jaipur').show();
	}
	function mumbai(){
		$('.jaipur').hide();
		$('.mumbai').show();
	}
</script>
@endpush