@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative ">
		@include('layouts.__navigation')
		<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
		<div class="flex flex-col h-full justify-center items-center text-center" style="padding: 25% 0">
			<div class="block md:hidden text-lg text-white uppercase">We design the</div>
			<div class="text-white font-semibold md:mb-5 text-5xl md:line--height-97 md:font--size-150">Our Capabilities</div>
			
			<!-- <div class="text-base md:font--size-22 text-white opacity-50 w-9/12 md:w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div> -->
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="block md:h--646 md:flex justify-between items-center mb-4 md:mb-10 ">
				<div class="block md:hidden w-full md:w-1/2 "><img class="h-auto  md:h-96" src="{{ asset('images/capabilities/branding.png') }}"></div>
				<div class="w-full md:w-1/2 ">
					<div class="text-5xl md:font--size-85 font-bold mb-4 md:mb--23">Branding</div>
					<div class="text-base md:font--size-22 text--gray line--height-160 mb-4 md:mb--28">Branding is important because it makes a memorable impression on consumers and allows your customers and clients to know what to expect from your company. It is a way of distinguishing yourself from the competitors and clarifying what it is you offer that makes you the better choice.</div>
					<a href="{{ url('capabilities/branding') }}" class="flex justify-center items-center w-32 h-12 md:w--315 md:h--64 bg--blue text-white md:font--size-18  font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
				<div class="hidden md:block w-full md:w-auto"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/branding.png') }}"></div>
			</div>

			<div class="block md:h--646 md:flex justify-between items-center mb-20">
				<div class="w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/marketing-strategy.png') }}"></div>
				<div class="w-full md:w-1/2">
					<div class="text-5xl md:font--size-85 font-bold mb-4 md:mb--23">
						<div>Marketing</div>
						<div class="text--blue">Strategy</div>	
					</div>
					<div class="text-base md:font--size-22 text--gray line--height-160 mb-4 md:mb--28">Think of us as your extended brains. It is important for all businesses to have an effective marketing strategy to capitalize and capture larger market share and higher share of voice. We help you do that. Get in touch with us to discuss your brand story and audit your brand to see if we are a good fit to work with each other.</div>
					<a href="{{ url('capabilities/marketing-strategy') }}" class="flex justify-center items-center w-32 h-12 md:w--315 md:h--64  bg--blue md:font--size-18 text-white font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
			</div>

			<div class="block md:h--646 md:flex justify-between items-center mb-20">
				<div class="block md:hidden w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/content-production.png') }}"></div>
				<div class="w-full md:w-1/2">
					<div class="text-5xl md:font--size-85 font-bold mb-4 md:mb--23">
						<div>Content</div>
						<div class="text--blue">Production</div>	
					</div>
					<div class="text-base md:font--size-22 text--gray line--height-160 mb-4 md:mb--28">Content production is a marketing strategy that focuses on developing and delivering valuable, relevant, and consistent content in order to attract and maintain a specific audience – and, eventually, to drive profitable consumer action.</div>
					<a href="{{ url('capabilities/content-production') }}" class="flex justify-center items-center w-32 h-12 md:w--315 md:h--64  bg--blue md:font--size-18 text-white font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
				<div class="hidden md:block w-full md:w-auto"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/content-production.png') }}"></div>
			</div>

			<div class="block md:h--646 md:flex justify-between items-center mb-20">
				<div class="w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/influencer-outreach.png') }}"></div>
				<div class="w-full md:w-1/2">
					<div class="text-5xl md:font--size-85 font-bold mb-4 md:mb--23">
						<div>Influencer </div>
						<div class="text--blue">Outreach</div>	
					</div>
					<div class="text-base md:font--size-22 text--gray line--height-160 mb-4 md:mb--28">The influencer marketing industry has grown to a staggering $1 Billion and is still in its nascent stages. Content creators hold tremendous power and influence over specific target audiences that can be leveraged to integrate brand products to reach potential customers.</div>
					<a href="{{ url('capabilities/influencer-outreach') }}" class="flex justify-center items-center w-32 h-12 md:w--315 md:h--64  bg--blue md:font--size-18 text-white font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
			</div>


			<div class="block md:h--646 md:flex justify-between items-center mb-20">
				<div class="w-full  md:w-1/2 mb-8 md:mb-0">
					<div class="text-5xl md:font--size-85 font-bold mb-4 md:mb--23">
						<div>Technology  </div>
						<div class="text--blue">and Design</div>	
					</div>
					<div class="text-base md:font--size-22 text--gray line--height-160 mb-4 md:mb--28">Technology is an enabler that allows us to solve complex problems in our business. In the context of marketing, we help brands create scalable infrastructure that they can build their businesses on and reach their desired customers.</div>
					<a href="{{ url('capabilities/technology-design') }}" class="flex justify-center items-center w-32 h-12 md:w--315 md:h--64  bg--blue md:font--size-18 text-white font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
				<div class="w-full  md:w-auto"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/technology-design.png') }}"></div>
			</div>
			 
		</div>
		
		
	</section>

	
	
	<section  class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container  pt-0 md:pt-20">
			<div class="w-full md:mb--140">
				<div class="text-3xl md:font--size-65  w-8/12 md:w-full font-semibold mb-4 md:mb-10">Have a <span class="text--blue">Project</span> Idea ?</div>
				<div class="text-base font--poppins md:font--size-17 w-full md:w-3/4 " 
				style="
				line-height: 192.8%;
				letter-spacing: 0.02em;
				color: rgba(55, 55, 55, 0.46);
				opacity: 0.8;">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
			</div>

			<form action="">
				<div class="flex flex-col gap-y-4 md:gap-y-0 mb-5">
					<div class="mb-1 md:mb--43">
						<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg-white focus:outline-none" placeholder="Email Address" style="border-radius: 15px">
					</div>
					<div class="mb-1 md:mb--43">
						<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg-white focus:outline-none" placeholder="Full Name" style="border-radius: 15px">
					</div>

					<div class="mb-1 md:mb--43">
						<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg-white focus:outline-none" placeholder="Phone Number" style="border-radius: 15px">
					</div>
					<div class="mb-1 md:mb--43">
						<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg-white focus:outline-none" placeholder="Reason to contact" style="border-radius: 15px">
					</div>
					<button class="w-full py-3 md:padding-button-have-a md:font--size-21 font--gilroy-md text-white text-center bg--blue"
					style="border-radius: 19px">Send</button>
				</div>
			</form>
		</div>
	</section>

@endsection
