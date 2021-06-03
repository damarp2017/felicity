@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative " >
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center" style="padding: 23% 0">
			<div class="text-white font-semibold mb-3 text-4xl md:font--size-150 md:mb-5 md:line--height-97">Insights</div>
			<div class="text-base md:font--size-22 text-center w-9/12 md:w-full md:text-lg text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		</div>
	</header>

	<section class="bg--gray-light w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 md:gap-20">
				<a href="{{ url('insights-inside') }}" class="bg-white rounded-b-lg shadow-lg">
					<img class="h-72 md:h-96 w-full object-cover object-center rounded-t-lg"
						src="{{ asset('images/insights/1.png') }}" alt="">
					<div class="p-5 rounded-b-lg">
						<div class="flex justify-between mb-3">
							<div class="text-xl md:font--size-32 font--gilroy-bold ">Roady V3.0 Ilustration</div>
						</div>

						<div class="md:font--size-16 font--gilroy-md mb-3">ILLUSTTRATION DESIGN</div>
						<div class="text-lg md:font--font--poppins size-17 line--height-160 text--grey-transparent">for world-class brands to make your products to live for
							for world-class brands to make your products to live for world-class brands to make your products 
						</div>
					</div>
				</a>	

				<a href="{{ url('insights-inside') }}" class="bg-white rounded-b-lg shadow-lg">
					<img class="h-72 md:h-96 w-full object-cover object-center rounded-t-lg"
						src="{{ asset('images/insights/2.png') }}" alt="">
					<div class="p-5 rounded-b-lg">
						<div class="flex justify-between mb-3">
							<div class="text-xl md:font--size-32 font--gilroy-bold ">Roady V3.0 Ilustration</div>
						</div>

						<div class="text-sm md:font--size-16 font--gilroy-md mb-3">ILLUSTTRATION DESIGN</div>
						<div class="text-lg md:font--size-17 font--poppins line--height-160 text--grey-transparent">for world-class brands to make your products to live for
							for world-class brands to make your products to live for world-class brands to make your products 
						</div>
					</div>
				</a>

				<a href="{{ url('insights-inside') }}" class="bg-white rounded-b-lg shadow-lg">
					<img class="h-72 md:h-96 w-full object-cover object-center rounded-t-lg"
						src="{{ asset('images/insights/4.png') }}" alt="">
					<div class="p-5 rounded-b-lg">
						<div class="flex justify-between mb-3">
							<div class="text-xl md:font--size-32 font--gilroy-bold ">Roady V3.0 Ilustration</div>
						</div>

						<div class="text-sm md:font--size-16 font--gilroy-md mb-3">ILLUSTTRATION DESIGN</div>
						<div class="text-lg md:font--size-17 font--poppins line--height-160 text--grey-transparent">for world-class brands to make your products to live for
							for world-class brands to make your products to live for world-class brands to make your products 
						</div>
					</div>
				</a>
				<a href="{{ url('insights-inside') }}" class="bg-white rounded-b-lg shadow-lg">
					<img class="h-72 md:h-96 w-full object-cover object-center rounded-t-lg"
						src="{{ asset('images/insights/3.png') }}" alt="">
					<div class="p-5 rounded-b-lg">
						<div class="flex justify-between mb-3">
							<div class="text-xl md:font--size-32 font--gilroy-bold ">Roady V3.0 Ilustration</div>
						</div>

						<div class="text-sm md:font--size-16 font--gilroy-md mb-3">ILLUSTTRATION DESIGN</div>
						<div class="text-lg md:font--size-17 font--poppins line--height-160 text--grey-transparent">for world-class brands to make your products to live for
							for world-class brands to make your products to live for world-class brands to make your products 
						</div>
					</div>
				</a>

				<a href="{{ url('insights-inside') }}" class="bg-white rounded-b-lg shadow-lg">
					<img class="h-72 md:h-96 w-full object-cover object-center rounded-t-lg"
						src="{{ asset('images/insights/6.png') }}" alt="">
					<div class="p-5 rounded-b-lg">
						<div class="flex justify-between mb-3">
							<div class="text-xl md:font--size-32 font--gilroy-bold ">Roady V3.0 Ilustration</div>
						</div>

						<div class="text-sm md:font--size-16 font--gilroy-md mb-3">ILLUSTTRATION DESIGN</div>
						<div class="text-lg md:font--size-17 font--poppins line--height-160 text--grey-transparent">for world-class brands to make your products to live for
							for world-class brands to make your products to live for world-class brands to make your products 
						</div>
					</div>
				</a>	

				<a href="{{ url('insights-inside') }}" class="bg-white rounded-b-lg shadow-lg">
					<img class="h-72 md:h-96 w-full object-cover object-center rounded-t-lg"
						src="{{ asset('images/insights/5.png') }}" alt="">
					<div class="p-5 rounded-b-lg">
						<div class="flex justify-between mb-3">
							<div class="text-xl md:font--size-32 font--gilroy-bold ">Roady V3.0 Ilustration</div>
						</div>

						<div class="text-sm md:font--size-16 font--gilroy-md mb-3">ILLUSTTRATION DESIGN</div>
						<div class="text-lg md:font--size-17 font--poppins line--height-160 text--grey-transparent">for world-class brands to make your products to live for
							for world-class brands to make your products to live for world-class brands to make your products 
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>

	<section class="bg--pink w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="text-3xl md:font--size-50 font-semibold text-white mb-3 md:mb-10">Learn Something New</div>
			<div class="text-white opacity-50 mb-4 md:font--size-22">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live .</div>
			<div class="block md:flex gap-x-4">
				<div class="flex-1 mb-5 md:mb-0">
					<input type="text" 
					class="w-full md:font--size-21 placeholder-white bg-red-400 font--gilroy-md rounded-xl px-5 md:px-10 py-4 outline-none focus:outline-none text-white"
					placeholder="Email Address">
				</div>
				<div class="flex-1 mb-5 md:mb-0">
					<input type="text" 
					class="w-full md:font--size-21 placeholder-white bg-red-400 font--gilroy-md rounded-xl px-5 md:px-10 py-4 outline-none focus:outline-none text-white"
					placeholder="Full Name">
				</div>
				<button class="bg-white w-full md:font--size-21 md:w-auto text--pink font--gilroy-md rounded-xl px-10 py-4 outline-none focus:outline-none">Subscribe</button>
			</div>
		</div>
	</section>
@endsection