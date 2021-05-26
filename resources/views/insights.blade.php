@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative" style="height: 999px">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center">
			<div class="text-white font-semibold mb-3 text-9xl">Insights</div>
			<div class="text-xl text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		</div>
	</header>

	<section class="bg--gray-light w-full overflow-x-hidden pt-36">
		<div class="mx-36">
			<div class="flex gap-x-10">
				<div class="w-1/2">
					<div class="bg-white rounded-b-lg mb-10">
						<img class="h-72 w-full object-cover object-center rounded-t-lg"
							src="{{ asset('images/insights/1.png') }}" alt="">
						<div class="p-5 rounded-b-lg">
							<div class="flex justify-between mb-3">
								<div class="text-2xl font-semibold">Roady V3.0 Ilustration</div>
								<div class="text-lg">FEATURED</div>
							</div>
	
							<div class="font-semibold mb-3">ILLUSTTRATION DESIGN</div>
							<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for
								world-class brands to make your products to live for world-class brands to make your products to
							</div>
						</div>
					</div>	
				</div>
				<div class="w-1/2">
					<div class="bg-white rounded-b-lg mb-10">
						<img class="h-72 w-full object-cover object-center rounded-t-lg"
							src="{{ asset('images/insights/2.png') }}" alt="">
						<div class="p-5 rounded-b-lg">
							<div class="flex justify-between mb-3">
								<div class="text-2xl font-semibold">Roady V3.0 Ilustration</div>
								<div class="text-lg">FEATURED</div>
							</div>
	
							<div class="font-semibold mb-3">ILLUSTTRATION DESIGN</div>
							<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for
								world-class brands to make your products to live for world-class brands to make your products to
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="flex gap-x-10">
				<div class="w-1/2">
					<div class="bg-white rounded-b-lg mb-10">
						<img class="h-72 w-full object-cover object-center rounded-t-lg"
							src="{{ asset('images/insights/4.png') }}" alt="">
						<div class="p-5 rounded-b-lg">
							<div class="flex justify-between mb-3">
								<div class="text-2xl font-semibold">Roady V3.0 Ilustration</div>
								<div class="text-lg">FEATURED</div>
							</div>
	
							<div class="font-semibold mb-3">ILLUSTTRATION DESIGN</div>
							<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for
								world-class brands to make your products to live for world-class brands to make your products to
							</div>
						</div>
					</div>	
				</div>
				<div class="w-1/2">
					<div class="bg-white rounded-b-lg mb-10">
						<img class="h-72 w-full object-cover object-center rounded-t-lg"
							src="{{ asset('images/insights/3.png') }}" alt="">
						<div class="p-5 rounded-b-lg">
							<div class="flex justify-between mb-3">
								<div class="text-2xl font-semibold">Roady V3.0 Ilustration</div>
								<div class="text-lg">FEATURED</div>
							</div>
	
							<div class="font-semibold mb-3">ILLUSTTRATION DESIGN</div>
							<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for
								world-class brands to make your products to live for world-class brands to make your products to
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="flex gap-x-10">
				<div class="w-1/2">
					<div class="bg-white rounded-b-lg mb-10">
						<img class="h-72 w-full object-cover object-center rounded-t-lg"
							src="{{ asset('images/insights/6.png') }}" alt="">
						<div class="p-5 rounded-b-lg">
							<div class="flex justify-between mb-3">
								<div class="text-2xl font-semibold">Roady V3.0 Ilustration</div>
								<div class="text-lg">FEATURED</div>
							</div>
	
							<div class="font-semibold mb-3">ILLUSTTRATION DESIGN</div>
							<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for
								world-class brands to make your products to live for world-class brands to make your products to
							</div>
						</div>
					</div>	
				</div>
				<div class="w-1/2">
					<div class="bg-white rounded-b-lg mb-10">
						<img class="h-72 w-full object-cover object-center rounded-t-lg"
							src="{{ asset('images/insights/5.png') }}" alt="">
						<div class="p-5 rounded-b-lg">
							<div class="flex justify-between mb-3">
								<div class="text-2xl font-semibold">Roady V3.0 Ilustration</div>
								<div class="text-lg">FEATURED</div>
							</div>
	
							<div class="font-semibold mb-3">ILLUSTTRATION DESIGN</div>
							<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for
								world-class brands to make your products to live for world-class brands to make your products to
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>

	<section class="bg--pink w-full overflow-x-hidden py-20">
		<div class="mx-36">
			<div class="text-3xl font-semibold text-white mb-3">Learn Something New</div>
			<div class="text-white opacity-50 mb-4">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live .</div>
			<div class="flex gap-x-4">
				<div class="flex-1"><input type="text" 
					class="w-full placeholder-white bg-red-400 rounded p-4 outline-none focus:outline-none text-white"
					placeholder="Email Address"></div>
				<div class="flex-1"><input type="text" 
					class="w-full placeholder-white bg-red-400 rounded p-4 outline-none focus:outline-none text-white"
					placeholder="Full Name"></div>
				<button class="bg-white text--pink rounded p-4 outline-none focus:outline-none">Subscribe</button>
			</div>
		</div>
	</section>
@endsection