@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative ">
		@include('layouts.__navigation')
        @include('layouts.__wave')
		<div class="mx-4 md:app-container 2xl:px-40">
			<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
			<div class="flex flex-col h-screen-2/3 md:h-screen justify-center items-center text-center">
				<!-- <div class="block md:hidden text-lg text-white uppercase">We design the</div> -->
				<h1 class="text-white font-semibold md:mb-5 text-5xl md:line--height-97 md:font--size-100">{{ $data ? $data->title : '' }}</h1>

				<!-- <div class="text-base md:font--size-20 text-white opacity-50 w-9/12 md:w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div> -->
			</div>
		</div>
	</header>

	<section class=" bg--section w-full overflow-x-hidden overflow-y-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container 2xl:px-40">
			<div class="tag block md:flex md:h-screen-3/4 justify-between items-center mb-20 ">
				<div class="block md:hidden w-full md:w-1/2 "><img class="h-auto  md:h-96" src="{{ asset('images/capabilities/branding.png') }}"></div>
				<div class="w-full md:w-1/2 ">
					<h2 class="text-5xl md:font--size-70 font-bold mb-4 md:mb--23">Branding</h2>
					<div class="text-base md:font--size-20 text--gray line--height-160 mb-4 md:mb--28">Branding is important because it makes a memorable impression on consumers and allows your customers and clients to know what to expect from your company. It is a way of distinguishing yourself from the competitors and clarifying what it is you offer that makes you the better choice.</div>
					<a href="{{ url('capabilities/branding') }}" class="w-32 h-12 md:w--315 md:h--64 bg--blue rounded-full text-center flex justify-center items-center text-white md:font--size-18 hover:zoom">See More</a>
				</div>
				<div class="hidden md:block w-full md:w-auto"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/branding.png') }}"></div>
			</div>

			<div class="tag block md:flex md:h-screen-3/4 justify-between items-center mb-20">
				<div class="w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/marketing-strategy.png') }}"></div>
				<div class="w-full md:w-1/2">
					<h2 class="text-5xl md:font--size-70 font-bold mb-4 md:mb--23">
						<div>Marketing</div>
						<div class="text--blue">Strategy</div>
					</h2>
					<div class="text-base md:font--size-20 text--gray line--height-160 mb-4 md:mb--28">Think of us as your extended brains. It is important for all businesses to have an effective marketing strategy to capitalize and capture larger market share and higher share of voice. We help you do that. Get in touch with us to discuss your brand story and audit your brand to see if we are a good fit to work with each other.</div>
					<a href="{{ url('capabilities/marketing-strategy') }}" class="w-32 h-12 md:w--315 md:h--64 bg--blue rounded-full text-center flex justify-center items-center text-white md:font--size-18 hover:zoom">See More</a>
				</div>
			</div>

			<div class="tag block md:flex md:h-screen-3/4 justify-between items-center mb-20">
				<div class="block md:hidden w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/content-production.png') }}"></div>
				<div class="w-full md:w-1/2">
					<h2 class="text-5xl md:font--size-70 font-bold mb-4 md:mb--23">
						<div>Content</div>
						<div class="text--blue">Production</div>
					</h2>
					<div class="text-base md:font--size-20 text--gray line--height-160 mb-4 md:mb--28">Content production is a marketing strategy that focuses on developing and delivering valuable, relevant, and consistent content in order to attract and maintain a specific audience – and, eventually, to drive profitable consumer action.</div>
					<a href="{{ url('capabilities/content-production') }}" class="w-32 h-12 md:w--315 md:h--64 bg--blue rounded-full text-center flex justify-center items-center text-white md:font--size-18 hover:zoom">See More</a>
				</div>
				<div class="hidden md:block w-full md:w-auto"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/content-production.png') }}"></div>
			</div>

			<div class="tag block md:flex md:h-screen-3/4 justify-between items-center mb-20">
				<div class="w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/influencer-outreach.png') }}"></div>
				<div class="w-full md:w-1/2">
					<h2 class="text-5xl md:font--size-70 font-bold mb-4 md:mb--23">
						<div>Influencer </div>
						<div class="text--blue">Outreach</div>
					</h2>
					<div class="text-base md:font--size-20 text--gray line--height-160 mb-4 md:mb--28">The influencer marketing industry has grown to a staggering $1 Billion and is still in its nascent stages. Content creators hold tremendous power and influence over specific target audiences that can be leveraged to integrate brand products to reach potential customers.</div>
					<a href="{{ url('capabilities/influencer-outreach') }}" class="w-32 h-12 md:w--315 md:h--64 bg--blue rounded-full text-center flex justify-center items-center text-white md:font--size-18 hover:zoom">See More</a>
				</div>
			</div>


			<div class="tag block md:flex md:h-screen-3/4 justify-between items-center">
				<div class="block md:hidden w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/content-production.png') }}"></div>
				<div class="w-full  md:w-1/2 mb-8 md:mb-0">
					<h2 class="text-5xl md:font--size-70 font-bold mb-4 md:mb--23">
						<div>Technology  </div>
						<div class="text--blue">and Design</div>
					</h2>
					<div class="text-base md:font--size-20 text--gray line--height-160 mb-4 md:mb--28">Technology is an enabler that allows us to solve complex problems in our business. In the context of marketing, we help brands create scalable infrastructure that they can build their businesses on and reach their desired customers.</div>
					<a href="{{ url('capabilities/technology-design') }}" class="w-32 h-12 md:w--315 md:h--64 bg--blue rounded-full text-center flex justify-center items-center text-white md:font--size-18 hover:zoom">See More</a>
				</div>
				<div class="hidden md:block w-full  md:w-auto"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/technology-design.png') }}"></div>
			</div>

		</div>


	</section>



	@include('components.have-a-project-idea-section')

@endsection
