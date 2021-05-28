@extends('layouts.app')
@section('content')
<header class="w-full overflow-x-hidden bg--header-gradient height--header">
	@include('layouts.__navigation')
	<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
	<div class="flex flex-col h-full justify-center items-center">
		<div class="text-white font-semibold text-5xl md:text-8xl mb-5 text-center"> Case Studies</div>
		<div class="text-base md:text-xl mb-5 md:mb-0 text-center text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam
			elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		<button class="flex md:hidden hover:bg-gray-100 p-4 justify-center items-center rounded-2xl bg-gray-50">
			<img src="{{ asset('images/utilities/filter.png') }}" alt="">
		</button>
	</div>
	<button class="hidden md:flex absolute top-2/3 right-36 hover:bg-gray-100 transform -translate-y-1/2 p-4 justify-center items-center rounded-2xl bg-gray-50">
		<img src="{{ asset('images/utilities/filter.png') }}" alt="">
	</button>
</header>

<section class="w-full">
	<div class="-mt-40 md:-mt-48">
		<div class="mx-4 md:mx-36">
			@for ($i = 0; $i < 3; $i++) 
				<div class="bg-white rounded-b-lg mb-10">
					<img class="h-72 w-full object-cover object-center rounded-t-lg"
						src="{{ asset('images/case_studies/ilus.png') }}" alt="">
					<div class="p-5 rounded-b-lg">
						<div class="flex justify-between mb-3">
							<div class="text-2xl font-semibold">Roady V3.0 Ilustration</div>
							<div class="text-lg">FEATURED</div>
						</div>

						<div class="text--pink font-semibold mb-3">ILLUSTTRATION DESIGN</div>
						<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for
							world-class brands to make your products to live for world-class brands to make your products to
						</div>
					</div>
				</div>
			@endfor
		</div>
	</div>
</section>

<section  class="bg-white w-full overflow-x-hidden py-10 md:pt-36">
	<div class="mx-4 md:mx-36">
		<div class="w-3/4 mb-10">
			<div class="text-3xl md:text-7xl w-9/12 md:w-full font-semibold mb-4">Have a <span class="text--pink">Project</span> Idea ?</div>
			<div class="text--grey-transparent">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
		</div>

		<form action="">
			<div class="block md:flex mb-5">
				<div class="w-full md:w-1/2">
					<div class="m-3">
						<input type="text" class="w-full p-3 rounded-xl bg-gray-100 focus:outline-none" placeholder="Email Address">
					</div>
					<div class="m-3">
						<input type="text" class="w-full p-3 rounded-xl bg-gray-100 focus:outline-none" placeholder="Full Name">
					</div>
					
				</div>
				<div class="w-full md:w-1/2">
					<div class="m-3">
						<input type="text" class="w-full p-3 rounded-xl bg-gray-100 focus:outline-none" placeholder="Phone Number">
					</div>
					<div class="m-3">
						<input type="text" class="w-full p-3 rounded-xl bg-gray-100 focus:outline-none" placeholder="Reason to contact">
					</div>
				</div>
			</div>
			<button class="w-full py-3 text-white text-center rounded bg--pink">Send</button>
		</form>
	</div>
</section>

@endsection