@extends('layouts.app')
@section('content')
<header class="w-full overflow-x-hidden bg--blue relative" style="background:#3B28C2">
	@include('layouts.__navigation')
	@include('layouts.__wave')
	<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
	<div class="flex flex-col h-screen-2/3 md:h-screen justify-center items-center">
		<div class="mx-4 md:app-container   ">
			<!-- <div class="md:font--size-24 text-lg text-white uppercase text-center mb-1 md:mb-0 md:text--we-design-the">We design the</div> -->
			<!-- <div class="text-white font-semibold text-8xl md:line--height-90 md:font--size-190 text-center">  -->
			<!-- Your brand is a promise to your customers. We help you keep it -->
			<!-- </div> -->
			<h1
				class="text-white font-semibold mb-10 md:mb-5 text-4xl  2xl:font--size-70 md:font--size-55 text-center leading-normal">
				{{ $data ? $data->title : '' }}</h1>
			<h1 class="text-white font-semibold md:mb-5 text-3xl  2xl:font--size-55 md:font--size-45 text-center ">{{ $data ? $data->subtitle : '' }}</h1>

			<!-- <div class="md:font--size-24  text-xl text-white uppercase mb-10 text-center" style="letter-spacing: 2px">that next generation will witness</div> -->
			<!-- <div class="md:font--size-18  text-base text-white text-center w-full opacity-50">Your brand is a promise to your customers. We help you keep it</div> -->
		</div>
	</div>
</header>

<section class=" bg--section w-full overflow-x-hidden overflow-y-hidden py-10 md:py-20">
	<div class="tag mx-4 md:app-container 2xl:px-40  md:pt-10">
		<!-- <div class="flex mb-20 flex-col text-center justify-center">
				<div class="mb-6 text-3xl md:font--size-65 font-semibold">About Us</div>
				<div class="md:font--size-18 text--gray">for world-class brands to make your products to live for world-class brands to make your products to live for world-class
					<br> brands to make your products to for world-class brands to make your . </div>
			</div> -->

		<div class="mb-10">
			<div class="flex items-center mb-3 ">
				<!-- <div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
				<h2 class="text--blue text-3xl md:font--size-52 font-bold">{{ $data ? $data->vision : '' }}</h2>
			</div>
			<div class="text-base md:font--size-20 text--gray leading-normal ">{{ $data ? $data->vision_description : '' }}</div>
		</div>


	</div>
	<div class="tag mx-4 md:app-container 2xl:px-40 ">
		<div class="block md:flex items-center mb-6">
			<div class="w-full md:w-1/2">
				<div class="flex items-center mb-3 md:mb-10">
					<!-- <div class="mr-4 "><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
					<h2 class="text--blue text-3xl md:font--size-52 font-bold">{{ $data ? $data->manifesto : '' }}</h2>
				</div>
				<div class="text-base md:font--size-20 text--gray leading-normal ">{{ $data ? $data->manifesto_description : '' }}</div>
			</div>
			<div class="tag w-full md:w-1/2 p-5"><img class="w-full"
					src="{{ $data ? asset($data->manifesto_image) : '' }}"></div>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 md:gap-x-5 mb-5">
			@if ($data)
				@foreach ($data->missions as $mission)
				<div class="tag card--about-home h-26 md:h-32 w-full   bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
					<img class="w-10 mr-5" src="{{ asset($mission['logo']) }}">
					<div>
						<div class="text-lg md:font--size-21 mb-0 md:mb-2 font-semibold text--blue">{{ $mission['title'] }}</div>
						<div class="text-base text--gray md:font--size-20">{{ $mission['subtitle'] }}</div>
					</div>
				</div>	
			@endforeach	
			@endif
			
			

			{{-- <div
				class="tag card--about-home h-26 md:h-32 w-full   bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
				<img class="w-10 mr-5" src="{{ asset('images/home/items/2.png?new') }}">
				<div>
					<div class="text-lg md:font--size-21 mb-0 md:mb-2 font-semibold text--blue">We’re Problem Solvers
					</div>
					<div class="text-base text--gray md:font--size-20">We simplify technology so you can focus on your
						brand</div>
				</div>
			</div>

			<div
				class="tag card--about-home h-26 md:h-32 w-full   bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
				<img class="w-10 mr-5" src="{{ asset('images/home/items/3.png?new') }}">
				<div>
					<div class="text-lg md:font--size-21 mb-0 md:mb-2 font-semibold text--blue">We Worship Data </div>
					<div class="text-base text--gray md:font--size-20">Our creativity is driven by data and human
						experiences</div>
				</div>
			</div>
			<div
				class="tag card--about-home h-26 md:h-32 w-full   bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
				<img class="w-10 mr-5" src="{{ asset('images/home/items/4.png?new') }}">
				<div>
					<div class="text-lg md:font--size-21 mb-0 md:mb-2 font-semibold text--blue">We Are Bold</div>
					<div class="text-base text--gray md:font--size-20">We dare to dream and to turn it into reality
					</div>
				</div>
			</div>

			<div
				class="tag card--about-home h-26 md:h-32 w-full  bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
				<img class="w-10 mr-5" src="{{ asset('images/home/items/5.png?new') }}">
				<div>
					<div class="text-lg md:font--size-21 mb-0 md:mb-2 font-semibold text--blue">We’re Agile</div>
					<div class="text-base text--gray md:font--size-20">We make decisions quickly but carefully</div>
				</div>
			</div>

			<div
				class="tag card--about-home h-26 md:h-32 w-full  bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
				<img class="w-10 mr-5" src="{{ asset('images/home/items/6.png?new') }}">
				<div>
					<div class="text-lg md:font--size-21 mb-0 md:mb-2 font-semibold text--blue">We’re Match-Makers</div>
					<div class="text-base font-normal text--gray md:font--size-20">From consumer to customer, we help
						you convert</div>
				</div>
			</div> --}}

		</div>

		@if ($data)
			<div class="flex justify-center gap-x-4 flex-wrap gap-y-4">
				<a href="{{ $data->button_1['link'] }}"
					class="w-full md:w-auto  md:h--68 bg--gradient-black p-4 md:py-5 md:px-10 text-white text-center text-base md:font--size-17 rounded-full hover:zoom">
					{{ $data->button_1['title'] }}
				</a>
				<a href="{{ $data->button_2['link'] }}"
					target="_blank"
					class=" w-full md:w-auto bg--gradient-black p-4 md:py-5 md:px-10 md:h--68 text-white text-center text-base md:font--size-17 rounded-full hover:zoom">
					{{ $data->button_2['title'] }} </a>
			</div>	
		@endif
		
	</div>


</section>


<section class="tag bg-white min-h-screen w-full overflow-x-hidden py-10 md:py-20">
	<div class="mx-4 md:app-container 2xl:px-40  mb-10">
		<div class="flex items-center ">
			<!-- <div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
			<h2 class="text--blue text-3xl md:font--size-52 font-bold">Our Capabilities</h2>
		</div>
	</div>
	<div class="flex overflow-x-auto pt-5 slider" id="capabilities-slider">
		@php
		$items = [
		[
		'slug'=>'marketing-strategy',
		'title'=>'Marketing<br />
		<span class="text--blue">Strategy</span>',
		'desc'=>"Think of us as your extended brains. It is important for all businesses to have an effective marketing
		strategy to capitalize and capture larger market share and higher share of voice. We help you do that. Get in
		touch with us to discuss your brand story and audit your brand to see if we are a good fit to work with each
		other."
		],[
		'slug'=>'branding',
		'title'=>'Branding',
		'desc'=>"Branding is important because it makes a memorable impression on consumers and allows your customers
		and clients to know what to expect from your company. It is a way of distinguishing yourself from the
		competitors and clarifying what it is you offer that makes you the better choice."
		],[
		'slug'=>'content-production',
		'title'=>'Content<br />
		<span class="text--blue">Production</span>',
		'desc'=>"Content production is a marketing strategy that focuses on developing and delivering valuable,
		relevant, and consistent content in order to attract and maintain a specific audience – and, eventually, to
		drive profitable consumer action."
		],[
		'slug'=>'influencer-outreach',
		'title'=>'Influencer<br />
		<span class="text--blue">Outreach</span>',
		'desc'=>"The influencer marketing industry has grown to a staggering $1 Billion and is still in its nascent
		stages. Content creators hold tremendous power and influence over specific target audiences that can be
		leveraged to integrate brand products to reach potential customers."
		],[
		'slug'=>'technology-design',
		'title'=>'Technology &<br />
		<span class="text--blue">Design</span>',
		'desc'=>"Technology is an enabler that allows us to solve complex problems in our business. In the context of
		marketing, we help brands create scalable infrastructure that they can build their businesses on and reach their
		desired customers."
		],
		];
		@endphp
		@foreach($items as $item)
		<div style="min-width: 100vw;">
			<div class="block md:flex mx-4 md:app-container 2xl:px-40 ">
				<div class="w-full md:w-1/2 text-center">
					<img class="inline max-h-45 md:max-h-80 max-w-full"
						src="{{ asset('images/capabilities/'.$item['slug'].'.png') }}">
				</div>
				<div class="w-full md:w-1/2">
					<h2 class="text-black text-5xl md:font--size-70 font-bold mb-4 leading-none">
						{!! $item['title'] !!}
					</h2>
					<div class="text-base md:font--size-20 text--gray mb-10 leading-normal ">{!! $item['desc'] !!}</div>

					<a href="{{ url('capabilities/'.$item['slug']) }}"
						class="w-32 h-12 md:w--315 md:h--64 bg--blue rounded-full text-center flex justify-center items-center text-white md:font--size-18 hover:zoom">See
						More</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>

	<div class="mx-4 md:app-container 2xl:px-40  ">
		<div class="flex justify-between items-center ">
			<div class="flex gap-x-2 items-center slider-dot">
				<div class="bg--blue w-10 h-1 md:h-2 rounded-full"></div>
				<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
				<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
			</div>
			<div class="flex gap-x-4 items-center">
				<div class=" hover:zoom bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full slider-control"
					target="#capabilities-slider" action="prev">
					<img class="h-3 md:h-auto" src="{{ asset('images/utilities/prev.png') }}">
				</div>
				<div class=" hover:zoom bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full slider-control"
					target="#capabilities-slider" action="next">
					<img class="h-3 md:h-auto" src="{{ asset('images/utilities/next.png') }}">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="tag bg-white w-full py-10 md:py-20" style="background-color: #fcfcfc">
		<div class="mx-4 md:app-container 2xl:px-40 ">
			<div class="flex mb-4 md:mb-10 flex-col">
				<h2 class="mb-4 md:mb-5 text-3xl md:font--size-70 font-semibold md:line--height-99c34">Your Brand Is In Good Hands</h2>
				<div class="text-base md:font--size-20 text--gray leading-normal ">The team that brings your ideas to life.</div>
			</div>
		</div>
		<div>
			<div style="max-width: 100%" class="px-4 md:px-20 pb-10 overflow-x-auto slider">
				<div class="grid -mr-4 md:-mr-36 grid-flow-col auto-cols-max gap-x-10 ">
					<div class="w-full">
						<img class="mb-4 h-48 md:h-80" src="{{ asset('images/person/1.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font-bold " style="margin-bottom: -5px">Bruce Wayne</div>
						<div class="text--color-team md:font--size-17 uppercase" >WEB DEVELOPER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-80" src="{{ asset('images/person/2.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font-bold " style="margin-bottom: -5px">Diana Prince</div>
						<div class="text--color-team md:font--size-17 uppercase" >GRAPHIC DESIGNER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-80" src="{{ asset('images/person/3.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font-bold " style="margin-bottom: -5px">Clark Kent</div>
						<div class="text--color-team md:font--size-17 uppercase" >GRAPHIC DESIGNER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-80" src="{{ asset('images/person/3.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font-bold " style="margin-bottom: -5px">Clark Kent</div>
						<div class="text--color-team md:font--size-17 uppercase" >GRAPHIC DESIGNER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-80" src="{{ asset('images/person/3.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font-bold " style="margin-bottom: -5px">Clark Kent</div>
						<div class="text--color-team md:font--size-17 uppercase" >GRAPHIC DESIGNER</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

@include('components.case-studies-insights-section')
<!-- <section class="tag bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:container--case-studies pt-20">
			<div class="flex mb-4 md:mb-10 flex-col">
				<div class="mb-4 md:mb-10 text-3xl md:font--size-70 font-semibold">Case Studies</div>
				<div class="text-base md:font--size-18 text--gray">for world-class brands to make your products to live for world-class brands to make your products to live for world-class
					<br> brands to make your products to for world-class brands to make your . </div>
			</div>

			<div class="flex gap-x-4 mb-20">
				<button class="bg--gradient-pink w-32 h-12 md:w--244 md:h--60 text-sm md:font--size-18 text-white rounded-full"> Explore Menu </button>
				<button class="bg--gradient-pink w-32 h-12 md:w--244 md:h--60 text-sm md:font--size-18 text-white rounded-full"> Work With Us </button>
			</div>

			@for ($i = 0; $i < 2; $i++)
			<a href="{{ url('case-studies-2') }}" class="bg-white rounded-t-2xl rounded-b-2xl mb-10 md:block md:mb-14">
				<img class="h-80 w-full object-cover object-center rounded-t-2xl" src="{{ asset('images/case_studies/ilus.png') }}" alt="">
				<div class="px-10 pt--42 pb--68 rounded-b-2xl">
					<div class="flex justify-between mb-3">
						<div class="text-2xl text--color-team md:font--size-42 mb-2 font--gilroy-bold">Roady V3.0 Ilustration</div>
						<div class="text-base text--color-team md:font--size-16 font--gilroy-md">FEATURED</div>
					</div>

					<div class="text--blue md:font--size-17 mb-2 font-bold"
					style="letter-spacing: 0.07em; line-height: 100.84%;">ILLUSTRATION DESIGN</div>
					<div class="text-base md:font--size-17 text--gray" style="line-height: 1.8;opacity: .8">for world-class brands to make your products to live for world-class brands to make your products to live for <br> world-class brands to make your products to</div>
				</div>
			</a>
			@endfor
		</div>
	</section>

	<section class="tag bg--gray-light w-full overflow-x-hidden  py-10 md:py-20">
		<div class="mx-4 md:app-container 2xl:px-40  md:-mr--113 md:w-full">
			<div class="flex flex-col md:flex-row items-center w-full">
				<div class="w-full md:w-1/2 mr-0 mb-3 md:mb-0">
					<div class="w-10/12">
						<div class="text-3xl md:font--size-70 font-semibold mb-4 md:mb-10">Insights</div>
						<div class="mb-4 md:mb-10 text-base md:font--size-20 text--gray" style="line-height: 160%;">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
						<a href="//medium.com/@felicitymedia" target="_blank" class="flex items-center justify-center text-sm md:font--size-18 bg--blue text-white w-44 h-12 md:w--328 md:h--77 rounded-full"> See More Insights </a>
					</div>
				</div>
				<div class="w-full md:w-1/2">
					<div class="grid md:grid-flow-col md:auto-cols-max md:mr-0 ">
						@for ($i = 0; $i < 2; $i++)
							<div class="card--insights-sm md:card--insights shadow-2xl">
								<img class="mb-4 h-64 w-full object-cover object-center rounded" src="{{ asset('images/home/insights.png') }}">
								<div class="py-5 px-2">
									<div class=" text-xl md:font--size-28 mb-2">Design process we have is unexpectional</div>
									<div class=" mb-6 md:font-size-12" style="line-height: 163.5%; color: #929292">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat dolor a urna vel orci interdum amet, natoque id. Egestas sed adipiscing .</div>
									<a href="" class="text--blue  md:font--size-12">Learn More</a>
								</div>
							</div>
						@endfor
					</div>
				</div>
			</div>
		</div>
	</section> -->

@include('components.have-a-project-idea-section')

<section class="tag bg--section w-full overflow-x-hidden py-10 md:py-20">
	<div class="mx-4 md:app-container 2xl:px-40  ">
		<div class="block md:flex items-center">
			<div class="w-full md:w-1/2">
				<img class="h-auto md:h-96" src="{{ asset('images/home/join.png') }}" alt="">
			</div>
			<div class="w-full md:w-1/2">
				<h2 class="text-3xl md:font--size-75 font-semibold mb-4 md:mb-10">Join the <span
						class="text--blue">Team</span></h2>
				<div class="text-base md:font--size-20 text--gray mb-10 md:mb-14" style="line-height: 160%;">Our vision
					of taking India to the world is impossible without the help of honest, talented, and purpose driven
					individuals. We are on a constant lookout for people that believe in the power of ideas and dare to
					change the world with their own.</div>
				<a href="{{ url('opportunities') }}"
					class="flex justify-center items-center bg--blue rounded-full text-sm md:font--size-18 text-white w-32 h-12 md:w--244 md:h--60  hover:zoom">Explore
					Profiles</a>
			</div>
		</div>
	</div>

</section>

<section class=" -mb-20  overflow-x-hidden bg--section">
	<div class="z-10 relative mx-4 md:app-container 2xl:px-40  ">
		<div class=" md:p-10 p-5 bg--blue rounded-xl">
			<h2 class="text-2xl md:font--size-45 font-semibold text-white mb--17 md:mb-10">Learn Something New</h2>
			<div class="text-white opacity-50 md:mb-20 mb-5 md:font--size-18">We share new insights every week. We don’t
				spam. Promise.</div>
			<form method="post" action="{{ route('home.subscribe') }}">
                @csrf
				<div class="block md:flex gap-x-4">
					<div class="flex-1 mb-5 md:mb-0">
						<input type="text" style="background: rgba(255, 255, 255, 0.15);
						border-radius: 12px;" class="w-full md:font--size-21 font--gilroy-md placeholder-white p-4 md:padding-form-learn-something outline-none focus:outline-none text-white"
							placeholder="Email Address" name="email" required="">
					</div>
					<div class="flex-1 mb-5 md:mb-0">
						<input type="text" style="background: rgba(255, 255, 255, 0.15);
						border-radius: 12px;" class="w-full md:font--size-21 font--gilroy-md placeholder-white p-4 md:padding-form-learn-something outline-none focus:outline-none text-white"
							placeholder="Full Name" name="name" required="">
					</div>
					<button
						class="bg-white w-full md:font--size-21 font--gilroy-md md:w-auto text--blue p-4 md:padding-button-learn-something outline-none font-bold focus:outline-none  hover:zoom"
						style="border-radius: 7px;" type="submit">Subscribe</button>
				</div>
			</form>
		</div>
	</div>

</section>

@endsection
