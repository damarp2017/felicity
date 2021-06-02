@extends('layouts.app')
@section('content')
	@include('layouts.__navigation_light')

	<section class="bg-white w-full overflow-x-hidden py-20 md:py-32">
		<div class="mx-4 md:app-container">
			<div class="mb-10 md:mb-24">
				<div class="mb-3 font-semibold text-4xl md:font--size-65">Have a <span class="text--pink">Project</span> Idea ?</div>
				<div class="text-gray-400 text--typography mb-8 text-base md:font--size-17 font--poppins">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
				<div class="flex gap-x-4">
					<button class="py-2 md:py-3 px-8 md:font--size-16 bg--green text-white rounded-full">Mumbai</button>
					<button class="py-2 md:py-3 px-8 md:font--size-16 bg-gray-200 text-white rounded-full">Jaipur</button>
				</div>
			</div>

			<div class="flex flex-col md:flex-row items-center gap-y-10 md:gap-y-0 gap-x-0 md:gap-x-14 mb-10">
				<div class="w-full md:w-auto">
					<div class="text-md md:font--size-14 uppercase text-gray-400 font--gilroy-md">ADDRESS</div>
					<div class="text-md md:font--size-19 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
				</div>
				<div class="w-full md:w-auto">
					<div class="text-md md:font--size-14 uppercase text-gray-400 font--gilroy-md">PHONE</div>
					<div class="text-md md:font--size-19 text-gray-500">+91 91 2345678</div>
				</div>
				<div class="w-full md:w-auto">
					<div class="text-md md:font--size-14 uppercase text-gray-400 font--gilroy-md">EMAIL</div>
					<div class="text-md md:font--size-19 text-gray-500">+91 91 2345678</div>
				</div>
			</div>

			<div>
				<div class="block md:flex items-stretch gap-x-7">
					<div class="block md:hidden w-full md:w-1/2 mb-10">
						<img class="h-96 w-full object-cover object-center rounded-2xl" src="{{ asset('images/contact_us/maps.png') }}" alt="">
					</div>
					<div class="w-full md:w-1/2">
						<form action="">
							<div class="mb-7">
								<input type="text" class="rounded-lg w-full p-3 bg-gray-100 md:font--size-19 focus:outline-none" placeholder="Email Address">
							</div>
							<div class="mb-7">
								<input type="text" class="rounded-lg w-full p-3 bg-gray-100 md:font--size-19 focus:outline-none" placeholder="Full Name">
							</div>
							<div class="mb-7">
								<input type="text" class="rounded-lg w-full p-3 bg-gray-100 md:font--size-19 focus:outline-none" placeholder="Phone Number">
							</div>
							<div class="mb-7">
								<input type="text" class="rounded-lg w-full p-3 bg-gray-100 md:font--size-19 focus:outline-none" placeholder="Reason to contact">
							</div>
							
							<button class="w-full py-3 text-white text-center font--gilroy-md md:font--size-21 rounded-lg bg--pink">Send</button>
						</form>
					</div>
					<div class="hidden md:block w-full md:w-1/2">
						<img class="h-96 w-full object-cover object-center rounded-2xl" src="{{ asset('images/contact_us/maps.png') }}" alt="">
					</div>
				</div>
			</div>
			
		</div>
	</section>
@endsection