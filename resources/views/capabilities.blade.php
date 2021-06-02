@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative height--80vh md:height--90vh">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center text-center">
			<div class="text-xl text-white uppercase">We design the</div>
			<div class="text-white font-semibold md:mb-5 text-5xl md:line--height-97 md:font--size-150">Our Capabilities</div>
			<div class="text-xl md:font--size-35 text-white mb-3 uppercase md:normal-case">that next <span class="font-normal md:font-semibold not-italic md:italic">generation</span> will witness</div>
			<div class="text-base md:font--size-22 text-white opacity-50 w-9/12 md:w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="block md:flex items-center mb-4 md:mb-10">
				<div class="block md:hidden w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/brand.png') }}"></div>
				<div class="w-full md:w-1/2">
					<div class="text-5xl md:font--size-85 font-bold mb-10">Branding</div>
					<div class="text-base md:font--size-22 text-gray-600 mb-10">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<a href="{{ url('capabilities-inside') }}" class="bg--pink py-3 text-white px-10 md:py-5 md:font--size-18 md:px-20 font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
				<div class="hidden md:block w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/brand.png') }}"></div>
			</div>

			<div class="block md:flex justify-between items-center mb-20">
				<div class="w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/strategi.png') }}"></div>
				<div class="w-full md:w-1/2">
					<div class="text-5xl md:font--size-85 font-bold mb-4 md:mb-10">
						<div>Marketing</div>
						<div class="text--pink">Strategy</div>	
					</div>
					<div class="text-base md:font--size-22 text-gray-600 mb-4 md:mb-10">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<a href="{{ url('capabilities-inside') }}" class="bg--pink py-3 md:py-5 md:font--size-18 text-white px-10 md:px-20 font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
			</div>

			<div class="block md:flex justify-between items-center mb-20">
				<div class="block md:hidden w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/content.png') }}"></div>
				<div class="w-full md:w-1/2">
					<div class="text-5xl md:font--size-85 font-bold mb-4 md:mb-10">
						<div>Content</div>
						<div class="text--pink">Production</div>	
					</div>
					<div class="text-base md:font--size-22 text-gray-600 mb-4 md:mb-10">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<a href="{{ url('capabilities-inside') }}" class="bg--pink py-3 md:py-5 md:font--size-18 text-white px-10 md:px-20 font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
				<div class="hidden md:block w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/content.png') }}"></div>
			</div>

			<div class="block md:flex justify-between items-center mb-20">
				<div class="w-full md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/influencer.png') }}"></div>
				<div class="w-full md:w-1/2">
					<div class="text-5xl md:font--size-85 font-bold mb-4 md:mb-10">
						<div>Influencer </div>
						<div class="text--pink">Outreach</div>	
					</div>
					<div class="text-base md:font--size-22 text-gray-600 mb-4 md:mb-10">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<a href="{{ url('capabilities-inside') }}" class="bg--pink py-3 md:py-5 md:font--size-18 text-white px-10 md:px-20 font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
			</div>


			<div class="block md:flex justify-between items-center mb-20">
				<div class="w-full  md:w-1/2 mb-8 md:mb-0">
					<div class="text-5xl md:font--size-85 font-bold mb-4 md:mb-10">
						<div>Technology  </div>
						<div class="text--pink">and Design</div>	
					</div>
					<div class="text-base md:font--size-22 text-gray-600 mb-4 md:mb-10">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<a href="{{ url('capabilities-inside') }}" class="bg--pink py-3 md:py-5 md:font--size-18 text-white px-10 md:px-20 font--gilroy-md rounded-full outline-none focus:outline-none">See More</a>
				</div>
				<div class="w-full  md:w-1/2"><img class="h-auto md:h-96" src="{{ asset('images/capabilities/tech.png') }}"></div>
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