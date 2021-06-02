@extends('layouts.app')
@section('content')
<header class="w-full overflow-x-hidden bg--header-gradient height--90vh">
	@include('layouts.__navigation')
	<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
	<div class="flex flex-col h-full justify-center items-center">
		<div class="text-white font-semibold text-5xl md:font--size-100 mb-5 md:line--height-97 text-center"> Case Studies</div>
		<div class="text-base md:font--size-22 mb-5 md:mb-0 text-center text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam
			elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		<button class="flex md:hidden hover:bg-gray-100 p-4 justify-center items-center rounded-2xl bg-gray-50">
			<img src="{{ asset('images/utilities/filter.png') }}" alt="">
		</button>
	</div>
	<button class="hidden md:flex absolute top-1/3 right-36 hover:bg-gray-100 transform translate-y-1/2 p-3 justify-center items-center rounded-2xl bg-gray-50">
		<img class="h-4 w-4" src="{{ asset('images/utilities/filter.png') }}" alt="">
	</button>
</header>

<section class="w-full">
	<div class="-mt-40 md:-mt-28">
		<div class="mx-4 md:app-container">
			@for ($i = 0; $i < 3; $i++) 
			<a href="{{ url('case-studies-2') }}" class="bg-white rounded-b-lg mb-10 md:block md:mb-14 shadow-lg">
				<img class="h-72 mb-4 w-full object-cover object-center rounded-t-lg" src="{{ asset('images/case_studies/ilus.png') }}" alt="">
				<div class="p-5 rounded-b-lg">
					<div class="flex justify-between mb-2">
						<div class="text-xl md:font--size-32 font--gilroy-bold">Roady V3.0 Ilustration</div>
						<div class="text-base md:font--size-16 font--gilroy-md">FEATURED</div>
					</div>
					
					<div class="text--pink md:font--size-17 font-semibold mb-1">ILLUSTTRATION DESIGN</div>
					<div class="text-base md:font--size-17 font--poppins text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
				</div>
			</a>
			@endfor
		</div>
	</div>
</section>


<section  class="bg--section w-full overflow-x-hidden py-10 md:py-20">
	<div class="mx-4 md:app-container">
		<div class="w-full mb-10">
			<div class="text-3xl md:font--size-80  w-8/12 md:w-full font-semibold mb-4 md:mb-10">Have a <span class="text--pink">Project</span> Idea ?</div>
			<div class="text-base md:font--size-17 w-full md:w-3/4 text--grey-transparent">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
		</div>

		<form action="">
			<div class="block md:flex mb-5">
				<div class="w-full md:w-1/2">
					<div class="m-0 md:m-3 mb-3 md:mb-0">
						<input type="text" class="w-full p-3 rounded-xl md:font--size-19 bg-white font--gilroy-md focus:outline-none" placeholder="Email Address">
					</div>
					<div class="m-0 md:m-3 mb-3 md:mb-0">
						<input type="text" class="w-full p-3 rounded-xl md:font--size-19 bg-white font--gilroy-md focus:outline-none" placeholder="Full Name">
					</div>
					
				</div>
				<div class="w-full md:w-1/2">
					<div class="m-0 md:m-3 mb-3 md:mb-0">
						<input type="text" class="w-full p-3 rounded-xl md:font--size-19 bg-white font--gilroy-md focus:outline-none" placeholder="Phone Number">
					</div>
					<div class="m-0 md:m-3 mb-3 md:mb-0">
						<input type="text" class="w-full p-3 rounded-xl md:font--size-19 bg-white font--gilroy-md focus:outline-none" placeholder="Reason to contact">
					</div>
				</div>
			</div>
			<button class="w-full py-3 md:font--size-21 text-white text-center font--gilroy-md rounded bg--pink">Send</button>
		</form>
	</div>
</section>

@endsection