@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative" style="background:#3B28C2">
		@include('layouts.__navigation')
		<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
		<div class="flex flex-col h-full justify-center items-center" style="padding: 25% 0">
			<div class="mx-4 md:app-container">
				<div class="md:font--size-24 text-lg text-white uppercase text-center mb-1 md:mb-0 md:text--we-design-the">We design the</div>
				<div class="text-white font-semibold text-8xl md:line--height-90 md:font--size-190 text-center"> Future</div>
				<div class="md:font--size-24  text-xl text-white uppercase mb-10 text-center" style="letter-spacing: 2px">that next generation will witness</div>
				<div class="md:font--size-20  text-base text-white text-center w-full opacity-50">Your brand is a promise to your customers. We help you keep it</div>
			</div>
		</div>
	</header>

	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container pt-20">
			<!-- <div class="flex mb-20 flex-col text-center justify-center">
				<div class="mb-6 text-3xl md:font--size-65 font-semibold">About Us</div>
				<div class="md:font--size-20 text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class 
					<br> brands to make your products to for world-class brands to make your . </div>
			</div> -->

			<div class="mb-20">
				<div class="flex items-center mb-3 ">
					<!-- <div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
					<div class="text--blue text-3xl md:font--size-52 font-bold">Our Vision</div>
				</div>
				<div class="text-base md:font--size-20 text--grey-transparent" style="line-height: 1.8">Our vision is to take India to the world - capture its culture, its people, its expertise, and its diversity to enable other markets to enrich and inculcate Indian values; to make India a front-runner in advertising</div>
			</div>

			<div class="block md:flex items-center mb-6">
				<div class="w-full md:w-1/2">
					<div class="flex items-center mb-3 md:mb-10">
						<!-- <div class="mr-4 "><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
						<div class="text--blue text-3xl md:font--size-52 font-bold">Our Manifestos</div>
					</div>
					<div class="text-base md:font--size-20 text--gray" style="line-height: 1.8">Felicity was started out of sheer love and admiration for the art of advertising. We believe that ideas can change the world and it is our constant endeavour to help businesses grow and evolve over time. We want to work with brands that synergise with the values that we strongly imbibe in every thing we do here at Felicity.</div>
				</div>
				<div class="w-full md:w-1/2 p-5"><img class="w-full" style="object-fit: none" src="{{ asset('images/home/our_manifestos.png') }}"></div>
			</div>
		</div>
		<div class="mx-4 pt-0 md:pt-20 md:px-10 md:-mr--27">
			<div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 md:gap-x-0 mb-6 md:mb-10">

					<div class="card--about-home w-full md:w-auto  bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/4.png?new') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--blue">Win-Win Situation</div>
							<div class="text-base text--gray md:font--size-20">When you score, we score!</div>
						</div>
					</div>

					<div class="card--about-home w-full md:w-auto  bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/5.png?new') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--blue">We’re Problem Solvers</div>
							<div class="text-base text--gray md:font--size-20">We simplify technology so you can focus on your brand.</div>
						</div>
					</div>



					
					<div class="card--about-home w-full md:w-auto  bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/2.png?new') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--blue">We Worship Data </div>
							<div class="text-base text--gray md:font--size-20">Our creativity is driven by data and human experiences</div>
						</div>
					</div>
					<div class="card--about-home w-full md:w-auto  bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/3.png?new') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--blue">We Are Bold</div>
							<div class="text-base text--gray md:font--size-20">We dare to dream and to turn it into reality</div>
						</div>
					</div>

					<div class="card--about-home w-full md:w-auto  bg-white rounded-xl flex px-6 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/6.png?new') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--blue">We’re Agile</div>
							<div class="text-base text--gray md:font--size-20">We make decisions quickly but carefully</div>
						</div>
					</div>

					<div class="card--about-home w-full md:w-auto  bg-white rounded-xl flex px-6 py-4 items-center mb-4 ">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/1.png?new') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--blue">We’re Match-Makers</div>
							<div class="text-base font-normal text--gray md:font--size-20">From consumer to customer, we help you convert</div>
						</div>
					</div>

			</div>

			<div class="flex justify-center gap-x-4 mb-20">
				<a href="{{ url('about-us') }}" class="h-auto w-auto md:w--195 md:h--68 bg--gradient-black p-4 md:py-5 md:px-10 text-white text-center text-base md:font--size-17 rounded-full"> Know More </a>
				<button class="bg--gradient-black p-4 md:py-5 md:px-10 md:w--290 md:h--68 text-white text-base md:font--size-17 rounded-full"> Download Company Deck </button>
			</div>
			 
		</div>
		
		
	</section>


	<section class="bg-white min-h-screen w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container mb-10">
			<div class="flex items-center ">
				<!-- <div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
				<div class="text--blue text-3xl md:font--size-52 font-bold">Our Capabilities</div>
			</div>
		</div>
		<div class="flex overflow-x-auto pt-5 slider" id="capabilities-slider">
			@php
			$items = [
				[
					'slug'=>'marketing-strategy',
					'title'=>'<div class="md:mb-11">Marketing</div>
								<div class="text--blue">Strategy</div>',
					'desc'=>"Think of us as your extended brains. It is important for all businesses to have an effective marketing strategy to capitalize and capture larger market share and higher share of voice. We help you do that. Get in touch with us to discuss your brand story and audit your brand to see if we are a good fit to work with each other."
				],[
					'slug'=>'branding',
					'title'=>'<div class="md:mb-11">Branding</div>',
					'desc'=>"Branding is important because it makes a memorable impression on consumers and allows your customers and clients to know what to expect from your company. It is a way of distinguishing yourself from the competitors and clarifying what it is you offer that makes you the better choice."
				],[
					'slug'=>'content-production',
					'title'=>'<div class="md:mb-11">Content</div>
								<div class="text--blue">Production</div>',
					'desc'=>"Content production is a marketing strategy that focuses on developing and delivering valuable, relevant, and consistent content in order to attract and maintain a specific audience – and, eventually, to drive profitable consumer action."
				],[
					'slug'=>'influencer-outreach',
					'title'=>'<div class="md:mb-11">Influencer</div>
								<div class="text--blue">Outreach</div>',
					'desc'=>"The influencer marketing industry has grown to a staggering $1 Billion and is still in its nascent stages. Content creators hold tremendous power and influence over specific target audiences that can be leveraged to integrate brand products to reach potential customers."
				],[
					'slug'=>'technology-design',
					'title'=>'<div class="md:mb-11">Technology &</div>
								<div class="text--blue">Design</div>',
					'desc'=>"Technology is an enabler that allows us to solve complex problems in our business. In the context of marketing, we help brands create scalable infrastructure that they can build their businesses on and reach their desired customers."
				],
			];
			@endphp
			@foreach($items as $item)
			<div style="min-width: 100vw;">
				<div class="block md:flex mx-4 md:app-container">
					<div class="w-full md:w-1/2">
						<img class="max-h-80 max-w-full" src="{{ asset('images/capabilities/'.$item['slug'].'.png') }}">
					</div>
					<div class="w-full md:w-1/2">
						<div class="text-black text-3xl md:font--size-85 font-bold mb-4 md:mb-10">
							{!! $item['title'] !!}
						</div>
						<div class="text-base md:font--size-20 text--grey-transparent mb-10" style="line-height: 1.8">{!! $item['desc'] !!}</div>
						
						<a href="{{ url('capabilities/'.$item['slug']) }}" class="w-32 h-12 md:w--315 md:h--64 bg--blue rounded-full text-center flex justify-center items-center text-white md:font--size-18">See More</a>
					</div>
				</div>
			</div>	
			@endforeach
		</div>
		
		<div class="mx-4 md:app-container ">
			<div class="flex justify-between items-center">
				<div class="flex gap-x-4 items-center">
					<div class="bg--blue w-10 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
				</div>
				<div class="flex gap-x-4 items-center">
					<div class="bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full slider-control" target="#capabilities-slider" action="next">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/prev.png') }}">
					</div>
					<div class="bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full slider-control" target="#capabilities-slider" action="prev">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/next.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full py-10 md:py-20" style="background-color: #fcfcfc">
		<div class="mx-4 md:app-container pt-0 md:pt-20">
			<div class="flex mb-4 md:mb-10 flex-col">
				<div class="mb-4 md:mb-5 text-3xl md:font--size-85 font-semibold md:line--height-99c34">Your Brand Is In Good Hands</div>
				<div class="text-base md:font--size-20 text--grey-transparent" style="line-height: 1.8">The team that brings your ideas to life.</div>
			</div>
		</div>
		<div>
			<div style="max-width: 100%" class="px-4 md:px-20 pb-10 overflow-x-auto">
				<div class="grid -mr-4 md:-mr-36 grid-flow-col auto-cols-max gap-x-10 ">
					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/1.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font--gilroy-bold" style="margin-bottom: -5px">Bruce Wayne</div>
						<div class="text--color-team md:font--size-17 font--gilroy-md uppercase" >WEB DEVELOPER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/2.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font--gilroy-bold" style="margin-bottom: -5px">Diana Prince</div>
						<div class="text--color-team md:font--size-17 font--gilroy-md uppercase" >GRAPHIC DESIGNER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/3.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font--gilroy-bold" style="margin-bottom: -5px">Clark Kent</div>
						<div class="text--color-team md:font--size-17 font--gilroy-md uppercase" >GRAPHIC DESIGNER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/3.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font--gilroy-bold" style="margin-bottom: -5px">Clark Kent</div>
						<div class="text--color-team md:font--size-17 font--gilroy-md uppercase" >GRAPHIC DESIGNER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/3.png') }}" alt="">
						<div class="text--color-team md:font--size-30 font--gilroy-bold" style="margin-bottom: -5px">Clark Kent</div>
						<div class="text--color-team md:font--size-17 font--gilroy-md uppercase" >GRAPHIC DESIGNER</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg--section py-10 md:py-20 w-full">
		<div class="mx-4 md:app-container">
			<div class="flex flex-col md:flex-row gap-y-4 md:gap-y-0">
				<div class="px-0 md:px-5 md:w-1/2">
					<div class="px-10 py-20 bg--blue rounded-xl">
						<div class="text-white text-3xl md:font--size-65 mb-10">Insight </div>
						<div class="mb-10 text-white font--poppins text-base md:font--size-17" style="opacity: .5;line-height: 1.8;">
							Make smarter business decisions while building a solid foundation for your brand.
						</div>
						<a href="//medium.com/@felicitymedia" target="_blank" class="flex justify-center items-center bg-white rounded-full text-sm md:font--size-18 text--blue w-32 h-12 md:w--244 md:h--60">See More Insight</a>
					</div>
				</div>
				<div class="px-0 md:px-5 md:w-1/2">
					<div class="px-10 py-20 bg--blue rounded-xl">
						<div class="text-white text-3xl md:font--size-65 mb-10">Case Studies </div>
						<div class="mb-10 text-white font--poppins text-base md:font--size-17" style="opacity: .5;line-height: 1.8;">
							Our work that can be measured in business impact.
						</div>
						<a href="//www.behance.net/felicityhq" target="_blank" class="flex justify-center items-center bg-white rounded-full text-sm md:font--size-18 text--blue w-32 h-12 md:w--244 md:h--60">See Our Work</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- <section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:container--case-studies pt-20">
			<div class="flex mb-4 md:mb-10 flex-col">
				<div class="mb-4 md:mb-10 text-3xl md:font--size-85 font-semibold">Case Studies</div>
				<div class="text-base md:font--size-20 text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class 
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
					<div class="text-base md:font--size-17 text--grey-transparent" style="line-height: 1.8;opacity: .8">for world-class brands to make your products to live for world-class brands to make your products to live for <br> world-class brands to make your products to</div>
				</div>
			</a>
			@endfor
		</div>
	</section>

	<section class="bg--gray-light w-full overflow-x-hidden  py-10 md:py-20">
		<div class="mx-4 md:app-container md:-mr--113 md:w-full">
			<div class="flex flex-col md:flex-row items-center w-full">
				<div class="w-full md:w-1/2 mr-0 mb-3 md:mb-0">
					<div class="w-10/12">
						<div class="text-3xl md:font--size-85 font-semibold mb-4 md:mb-10">Insights</div>
						<div class="mb-4 md:mb-10 text-base md:font--size-22 text--gray" style="line-height: 160%;">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
						<a href="//medium.com/@felicitymedia" target="_blank" class="flex items-center justify-center text-sm md:font--size-20 bg--blue text-white w-44 h-12 md:w--328 md:h--77 rounded-full"> See More Insights </a>
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



	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container pt-20">
			<div class="block md:flex items-center">
				<div class="w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/home/join.png') }}" alt="">
				</div>
				<div class="w-full md:w-1/2">
					<div class="text-3xl md:font--size-75 font-semibold mb-4 md:mb-10">Join the <span class="text--blue">Team</span></div>
					<div class="text-base md:font--size-22 text--gray mb-10 md:mb-14" style="line-height: 160%;">Our vision of taking India to the world is impossible without the help of honest, talented, and purpose driven individuals. We are on a constant lookout for people that believe in the power of ideas and dare to change the world with their own.</div>
					<a href="{{ url('opportunities') }}" class="flex justify-center items-center bg--blue rounded-full text-sm md:font--size-18 text-white w-32 h-12 md:w--244 md:h--60">Explore Profiles</a>
				</div>
			</div>
		</div>

	</section>

	<section class="-mb-36  overflow-x-hidden bg--section">
		<div class="z-20 relative mx-4 md:app-container ">
			<div class=" p-10 bg--blue rounded-xl" >
				<div class="text-3xl md:font--size-50 font-semibold text-white mb--17 md:mb-10">Learn Something New</div>
				<div class="text-white opacity-50 mb--44 md:font--size-20">We share new insights every week. We don’t spam. Promise.</div>
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
					<button class="bg-white w-full md:font--size-21 font--gilroy-md md:w-auto text--blue p-4 md:padding-button-learn-something outline-none focus:outline-none"
					style="border-radius: 7px;">Subscribe</button>
				</div>
			</div>
		</div>
		
	</section>

@endsection
