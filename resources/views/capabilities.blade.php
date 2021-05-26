@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative" style="height: 999px">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center">
			<div class="text-white font-semibold mb-3 text-9xl">Our Capabilities</div>
			<div class="text-2xl text-white mb-3">that next <span class="font-semibold italic">generation</span> will witness</div>
			<div class="text-xl text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden pt-36">
		<div class="mx-36">
			<div class="flex items-center mb-20">
				<div class="w-1/2">
					<div class="text-7xl font-bold mb-3">Branding</div>
					<div class="text-gray-600 mb-4">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<button class="bg--pink py-3 text-white px-10 rounded-full outline-none focus:outline-none">See More</button>
				</div>
				<div class="w-1/2"><img src="{{ asset('images/capabilities/brand.png') }}"></div>
			</div>


			<div class="flex justify-between items-center mb-20">
				<div class="w-1/2"><img src="{{ asset('images/capabilities/strategi.png') }}"></div>
				<div class="w-1/2">
					<div class="text-7xl font-bold mb-3">
						<div>Marketing</div>
						<div class="text--pink">Strategy</div>	
					</div>
					<div class="text-gray-600 mb-4">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<button class="bg--pink py-3 text-white px-10 rounded-full outline-none focus:outline-none">See More</button>
				</div>
			</div>

			<div class="flex justify-between items-center mb-20">
				<div class="w-1/2">
					<div class="text-7xl font-bold mb-3">
						<div>Content</div>
						<div class="text--pink">Production</div>	
					</div>
					<div class="text-gray-600 mb-4">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<button class="bg--pink py-3 text-white px-10 rounded-full outline-none focus:outline-none">See More</button>
				</div>
				<div class="w-1/2"><img src="{{ asset('images/capabilities/content.png') }}"></div>
			</div>

			<div class="flex justify-between items-center mb-20">
				<div class="w-1/2"><img src="{{ asset('images/capabilities/influencer.png') }}"></div>
				<div class="w-1/2">
					<div class="text-7xl font-bold mb-3">
						<div>Influencer </div>
						<div class="text--pink">Outreach</div>	
					</div>
					<div class="text-gray-600 mb-4">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<button class="bg--pink py-3 text-white px-10 rounded-full outline-none focus:outline-none">See More</button>
				</div>
			</div>


			<div class="flex justify-between items-center mb-20">
				<div class="w-1/2">
					<div class="text-7xl font-bold mb-3">
						<div>Technology  </div>
						<div class="text--pink">and Design</div>	
					</div>
					<div class="text-gray-600 mb-4">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<button class="bg--pink py-3 text-white px-10 rounded-full outline-none focus:outline-none">See More</button>
				</div>
				<div class="w-1/2"><img src="{{ asset('images/capabilities/tech.png') }}"></div>
			</div>
			 
		</div>
		
		
	</section>

	<section  class="bg--section w-full overflow-x-hidden py-36">
		<div class="mx-36">
			<div class="w-3/4 mb-10">
				<div class="text-7xl font-semibold mb-4">Have a <span class="text--pink">Project</span> Idea ?</div>
				<div class="text-gray-400">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
			</div>

			<form action="">
				<div class="mb-7">
					<input type="text" class="rounded-lg w-full p-3 bg-white focus:outline-none" placeholder="Email Address">
				</div>
				<div class="mb-7">
					<input type="text" class="rounded-lg w-full p-3 bg-white focus:outline-none" placeholder="Full Name">
				</div>
				<div class="mb-7">
					<input type="text" class="rounded-lg w-full p-3 bg-white focus:outline-none" placeholder="Phone Number">
				</div>
				<div class="mb-7">
					<input type="text" class="rounded-lg w-full p-3 bg-white focus:outline-none" placeholder="Reason to contact">
				</div>
				
				<button class="w-full py-3 text-white text-center rounded-lg bg--pink">Send</button>
			</form>
		</div>
	</section>

@endsection