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
		<div class="mx-4 md:mx--74">
			<div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 md:gap-20">
				@for ($i = 1; $i <= 6; $i++)
					<a href="{{ url('insights-inside') }}" class="bg-white rounded-b-2xl rounded-t-2xl">
						<img class="h-72 md:h-96 w-full object-cover object-center rounded-t-2xl"
							src="{{ asset('images/insights/'.$i.'.png') }}" alt="">
						<div class="p-5">
							<div class="flex justify-between mb-3">
								<div class="text-xl text--gray-insights md:font--size-32 font--gilroy-bold ">Roady V3.0 Ilustration</div>
							</div>

							<div class="md:font--size-16 text--gray-insights font--gilroy-md mb-3"
							style="letter-spacing: 0.05em;">ILLUSTTRATION DESIGN</div>
							<div class="text-lg md:font--font--poppins text--gray-insights size-17 line--height-160 "
							style="opacity: 0.5;">for world-class brands to make your products to live for
								for world-class brands to make your products to live for world-class brands to make your products 
							</div>
						</div>
					</a>		
				@endfor
				
			</div>
		</div>
	</section>

	<section class="w-full overflow-x-hidden py-10 md:py-20" 
	style="background: linear-gradient(121.44deg, #DE4045 -2.03%, #EF5E62 79.87%);">
		<div class="mx-4 md:mx--74">
			<div class="text-3xl md:font--size-50 font-semibold text-white mb--17 md:mb-10">Learn Something New</div>
			<div class="text-white opacity-50 mb--44 md:font--size-20">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live .</div>
			<div class="block md:flex gap-x-4">
				<div class="flex-1 mb-5 md:mb-0">
					<input type="text" style="background: rgba(255, 255, 255, 0.15);
					border-radius: 12px;"
					class="w-full md:font--size-21 font--gilroy-md placeholder-white p-4 md:padding-form-learn-something outline-none focus:outline-none text-white"
					placeholder="Email Address">
				</div>
				<div class="flex-1 mb-5 md:mb-0">
					<input type="text"  style="background: rgba(255, 255, 255, 0.15);
					border-radius: 12px;"
					class="w-full md:font--size-21 font--gilroy-md placeholder-white p-4 md:padding-form-learn-something outline-none focus:outline-none text-white"
					placeholder="Full Name">
				</div>
				<button class="bg-white w-full md:font--size-21 font--gilroy-md md:w-auto text--pink p-4 md:padding-button-learn-something outline-none focus:outline-none"
				style="border-radius: 7px;">Subscribe</button>
			</div>
		</div>
	</section>
@endsection