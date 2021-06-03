@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative ">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center" style="padding: 25% 0">
			<div class="md:font--size-24 text-xl text-white uppercase " style="line-height: .3;transform: translateY(10px);letter-spacing: 3px">We design the</div>
			<div class="text-white font-semibold text-5xl md:line--height-90 md:font--size-190"> Future</div>
			<div class="md:font--size-24  text-xl text-white uppercase mb-10" style="letter-spacing: 2px">that next generation will witness</div>
			<div class="md:font--size-20  text-base text-white text-center w-9/12 md:w-full opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		</div>
	</header>

	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="flex mb-20 flex-col text-center justify-center">
				<div class="mb-6 text-3xl md:font--size-65 font-semibold">About Us</div>
				<div class="md:font--size-20 text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class 
					<br> brands to make your products to for world-class brands to make your . </div>
			</div>

			<div class="mb-20">
				<div class="flex items-center mb-3 ">
					<div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div>
					<div class="text--pink text-3xl md:font--size-52 font-bold">Our Vision</div>
				</div>
				<div class="text-base md:font--size-20 text--grey-transparent" style="line-height: 1.8">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live for world-class products to live for world-class brands to make your products to live for world-class brands to make your products tofor world-class bra</div>
			</div>

			<div class="block md:flex items-center mb-6">
				<div class="w-full md:w-1/2">
					<div class="flex items-center mb-3 md:mb-10">
						<div class="mr-4 "><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div>
						<div class="text--pink text-3xl md:font--size-52 font-bold">Our Manifestos</div>
					</div>
					<div class="text-base md:font--size-20 text--gray" style="line-height: 1.8">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products tofor world-class ,for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make .</div>
				</div>
				<div class="w-full md:w-1/2"><img class="w-full" style="object-fit: none" src="{{ asset('images/home/our_manifestos.png') }}"></div>
			</div>
		</div>
		<div class="mx-4 pt-0 md:pt-20 md:px-10">
			<div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 md:gap-x-8 mb-6 md:mb-10">

				<div class="w-full">
					<div class="h-40 bg-white rounded-xl flex px-8 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/1.png') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--pink">We Know Your Consumer</div>
							<div class="text-base text--gray md:font--size-20">We know how to make your consumer, your customer.</div>
						</div>
					</div>
				</div>
				<div class="w-full">
					<div class="h-40 bg-white rounded-xl flex px-8 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/5.png') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--pink">We Solve Your Problems</div>
							<div class="text-base text--gray md:font--size-20">We simplify technology so you can focus on your brand.</div>
						</div>
					</div>
				</div>


				<div class="w-full">
					<div class="h-40 bg-white rounded-xl flex px-8 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/3.png') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--pink">We Are Bold</div>
							<div class="text-base text--gray md:font--size-20">We dare to dream, and we get it done.</div>
						</div>
					</div>
				</div>

				<div class="w-full">
					<div class="h-40 bg-white rounded-xl flex px-8 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/4.png') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--pink">We Win Together</div>
							<div class="text-base text--gray md:font--size-20">When your business wins, we win.</div>
						</div>
					</div>
				</div>

				<div class="w-full">
					<div class="h-40 bg-white rounded-xl flex px-8 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/2.png') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--pink">We Worship Data </div>
							<div class="text-base text--gray md:font--size-20">Our creativity is driven by data and human experiences.</div>
						</div>
					</div>
				</div>
				<div class="w-full">
					<div class="h-40 bg-white rounded-xl flex px-8 py-4 items-center mb-4 md:mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/6.png') }}">
						<div>
							<div class="text-lg md:font--size-21 mb-2 font-semibold text--pink">We Move Fast</div>
							<div class="text-base text--gray md:font--size-20">Quicker decision and patience, win us games.</div>
						</div>
					</div>
				</div>

			</div>

			<div class="flex justify-center gap-x-4 mb-20">
				<a href="{{ url('about-us') }}" class="h-auto w-auto md:w--195 md:h--68 bg--gradient-black py-5 px-10 text-white text-center text-base md:font--size-17 rounded-full"> Know More </a>
				<button class="bg--gradient-black py-5 px-10 md:w--290 md:h--68 text-white text-base md:font--size-17 rounded-full"> Download Company Deck </button>
			</div>
			 
		</div>
		
		
	</section>


	<section class="bg-white min-h-screen w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="flex items-center mb-20">
				<div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div>
				<div class="text--pink text-3xl md:font--size-52 font-bold">Our Capabilities</div>
			</div>
		</div>
		<div class="mx-4 md:px-10">
			<div class="block md:flex mb-20">
				<div class="w-full md:w-1/2">
					<img class="h-auto max:h-96 max:w-full w-full" src="{{ asset('images/home/capabilities.png') }}">
				</div>
				<div class="w-full md:w-1/2">
					<div class="text-black text-3xl md:font--size-85 font-bold mb-4 md:mb-10">
						<div class="md:mb-11">Marketing</div>
						<div class="text--pink">Strategy</div>
					</div>
					<div class="text-base md:font--size-20 text--grey-transparent mb-10" style="line-height: 1.8">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					
					<a href="{{ url('capabilities') }}" class="md:w--315 md:h--64 bg--pink rounded-full text-center flex justify-center items-center text-white md:font--size-18">See More</a>
				</div>
			</div>

			<div class="flex justify-between items-center">
				<div class="flex gap-x-4 items-center">
					<div class="bg--pink w-10 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
				</div>
				<div class="flex gap-x-4 items-center">
					<div class="bg-gray-200 w-10 flex items-center justify-center h-10 rounded-full">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/prev.png') }}">
					</div>
					<div class="bg-gray-200 w-10 flex items-center justify-center h-10 rounded-full">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/next.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full py-10 md:py-20" style="background-color: #fcfcfc">
		<div class="mx-4 md:app-container pt-20">
			<div class="flex mb-4 md:mb-10 flex-col">
				<div class="mb-4 md:mb-5 text-3xl md:font--size-85 font-semibold md:line--height-99c34">Team That Makes It Possible</div>
				<div class="text-base md:font--size-20 text--grey-transparent" style="line-height: 1.8">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
			</div>
		</div>
		<div>
			<div style="max-width: 100%" class="px-20 pb-10 overflow-x-auto">
				<div class="grid -mr-4 md:-mr-36 grid-flow-col auto-cols-max gap-x-20 ">
					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/1.png') }}" alt="">
						<div class="text-gray-900 md:font--size-30 font-semibold">Bruce Wayne</div>
						<div class="text-gray-900 md:font--size-17 uppercase">WEB DEVELOPER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/2.png') }}" alt="">
						<div class="text-gray-900 md:font--size-30 font-semibold">Diana Prince</div>
						<div class="text-gray-900 md:font--size-17 uppercase">GRAPHIC DESIGNER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/3.png') }}" alt="">
						<div class="text-gray-900 md:font--size-30 font-semibold">Clark Kent</div>
						<div class="text-gray-900 md:font--size-17 uppercase">GRAPHIC DESIGNER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/3.png') }}" alt="">
						<div class="text-gray-900 md:font--size-30 font-semibold">Clark Kent</div>
						<div class="text-gray-900 md:font--size-17 uppercase">GRAPHIC DESIGNER</div>
					</div>

					<div class="w-full">
						<img class="mb-4 h-48 md:h-96" src="{{ asset('images/person/3.png') }}" alt="">
						<div class="text-gray-900 md:font--size-30 font-semibold">Clark Kent</div>
						<div class="text-gray-900 md:font--size-17 uppercase">GRAPHIC DESIGNER</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container pt-20">
			<div class="flex mb-4 md:mb-10 flex-col">
				<div class="mb-4 md:mb-10 text-3xl md:font--size-85 font-semibold">Case Studies</div>
				<div class="text-base md:font--size-20 text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class 
					<br> brands to make your products to for world-class brands to make your . </div>
			</div>

			<div class="flex gap-x-4 mb-20">
				<button class="bg--gradient-pink md:w--244 md:h--60 text-sm md:font--size-18 text-white rounded-full"> Explore Menu </button>
				<button class="bg--gradient-pink md:w--244 md:h--60 text-sm md:font--size-18 text-white rounded-full"> Work With Us </button>
			</div>

			@for ($i = 0; $i < 2; $i++)
			<a href="{{ url('case-studies-2') }}" class="bg-white rounded-b-lg mb-10 md:block md:mb-14 shadow-sm">
				<img class="h-80 mb-4 w-full object-cover object-center rounded-t-lg" src="{{ asset('images/case_studies/ilus.png') }}" alt="">
				<div class="px-10 py-10 rounded-b-lg">
					<div class="flex justify-between mb-3">
						<div class="text-2xl md:font--size-42 font-semibold">Roady V3.0 Ilustration</div>
						<div class="text-base md:font--size-16">FEATURED</div>
					</div>
					
					<div class="text--pink md:font--size-17 font-semibold mb-2">ILLUSTTRATION DESIGN</div>
					<div class="text-base md:font--size-17 text--grey-transparent" style="line-height: 1.8;opacity: .8">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
				</div>
			</a>
			@endfor
		</div>
	</section>

	<section class="bg--gray-light w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">

			<div class="block md:flex items-center -mr-0 md:-mr-36">
				<div class="w-full md:w-1/3 mr-0 md:mr-20 mb-3 md:mb-0">
					<div class="text-3xl md:font--size-85 font-semibold mb-4 md:mb-10">Insights</div>
					<div class="mb-4 md:mb-10 text-base md:font--size-20 text--grey-transparent" style="line-height: 1.8">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
					<a href="{{ url('insights') }}" class="flex items-center justify-center text-sm md:font--size-20 bg--pink text-white md:w--328 md:h--77 rounded-full"> See More Insights </a>
				</div>
				@for ($i = 0; $i < 2; $i++)
					<div class="w-full md:w-1/4 p-3 bg-white rounded-xl mr-10 shadow-lg">
						<img class="mb-4 h-64 w-full object-cover object-center rounded" src="{{ asset('images/home/insights.png') }}">
						<div class="py-5 px-2">
							<div class=" text-xl md:font--size-24 mb-2">Design process we have is unexpectional</div>
							<div class="text--grey-transparent mb-6 md:font-size-12" style="line-height: 1.8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat dolor a urna vel orci interdum amet, natoque id. Egestas sed adipiscing .</div>
							<a href="" class="text--pink  md:font--size-12">Learn More</a>
						</div>
					</div>	
				@endfor
			</div>
		</div>
	</section>

	<section  class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container pt-20">
			<div class="w-full mb-10">
				<div class="text-3xl md:font--size-65  w-8/12 md:w-full font-semibold mb-4 md:mb-10">Have a <span class="text--pink">Project</span> Idea ?</div>
				<div class="text-base md:font--size-17 w-full md:w-3/4 text-gray-400" style="line-height: 1.8">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
			</div>

			<form action="">
				<div class="block md:flex mb-5">
					<div class="w-full md:w-1/2">
						<div class="m-0 md:mb-3 mb-3 md:mr-3">
							<input type="text" class="placeholder-gray-600 w-full p-3 rounded-xl md:font--size-19 bg-gray-100 focus:outline-none" placeholder="Email Address">
						</div>
						<div class="m-0 md:mb-3 mb-3 md:mr-3">
							<input type="text" class="placeholder-gray-600 w-full p-3 rounded-xl md:font--size-19 bg-gray-100 focus:outline-none" placeholder="Full Name">
						</div>
						
					</div>
					<div class="w-full md:w-1/2">
						<div class="m-0 md:mb-3 mb-3 md:ml-3">
							<input type="text" class="placeholder-gray-600 w-full p-3 rounded-xl md:font--size-19 bg-gray-100 focus:outline-none" placeholder="Phone Number">
						</div>
						<div class="m-0 md:mb-3 mb-3 md:ml-3">
							<input type="text" class="placeholder-gray-600 w-full p-3 rounded-xl md:font--size-19 bg-gray-100 focus:outline-none" placeholder="Reason to contact">
						</div>
					</div>
				</div>
				<button class="w-full py-3 md:font--size-21 font--gilroy-md text-white text-center rounded bg--pink">Send</button>
			</form>
		</div>
	</section>


	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container pt-20">
			<div class="blcok md:flex items-center">
				<div class="w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/home/join.png') }}" alt="">
				</div>
				<div class="w-full md:w-1/2">
					<div class="text-3xl md:font--size-75 font-semibold mb-4 md:mb-10">Join the <span class="text--pink">Team</span></div>
					<div class="text-base md:font--size-20 text--grey-transparent mb-10 md:mb-14">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products tofor world-class brands to make your products </div>
					<a href="{{ url('opportunities') }}" class="flex justify-center items-center bg--pink rounded-full text-sm md:font--size-18 text-white md:w--244 md:h--60">Explore Profiles</a>
				</div>
			</div>
		</div>
	</section>

	<section class="mx-4 md:app-container -mb-32 z-10 relative overflow-x-hidden ">
		<div class="bg--pink p-10 rounded-xl">
			<div class="text-3xl md:font--size-50 font-semibold text-white mb-3 md:mb-10">Learn Something New</div>
			<div class="text-white opacity-50 mb-4 md:font--size-20">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live .</div>
			<div class="block md:flex gap-x-4">
				<div class="flex-1 mb-5 md:mb-0">
					<input type="text" 
					class="w-full md:font--size-21 font--gilroy-md placeholder-white bg-red-400 rounded-xl md:rounded p-4 outline-none focus:outline-none text-white"
					placeholder="Email Address">
				</div>
				<div class="flex-1 mb-5 md:mb-0">
					<input type="text" 
					class="w-full md:font--size-21 font--gilroy-md placeholder-white bg-red-400 rounded-xl md:rounded p-4 outline-none focus:outline-none text-white"
					placeholder="Full Name">
				</div>
				<button class="bg-white w-full md:font--size-21 font--gilroy-md md:w-auto text--pink rounded-xl md:rounded p-4 outline-none focus:outline-none">Subscribe</button>
			</div>
		</div>
	</section>

@endsection
