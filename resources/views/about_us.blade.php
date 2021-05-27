@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative" style="height: 999px">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center text-center">
			<div class="text-white font-semibold text-9xl mb-5 text-center"> About Us</div>
			<div class="text-xl text-white opacity-50 w-1/2">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy .</div>
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden pt-36">
		<div class="mx-36">
			<div class="flex mb-10 flex-col">
				<div class="mb-6 text-7xl font-semibold">Vision</div>
				<div class="text-xl text--grey-transparent">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full overflow-x-hidden py-28">
		<div class="mx-36">
			<div class="flex mb-24 items-center">
				<div class="w-1/2">
					<img src="{{ asset('images/about_us/1.png') }}">
				</div>
				<div class="w-1/2">
					<div class="mb-3 text-black ">
						<div class="flex gap-x-4 items-center">
							<div class="w-48"><hr></div>
						</div>
						<div class=" text-7xl font-bold">For Company</div>
					</div>
					<div class="text-xl text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
				</div>
			</div>

			<div class="flex mb-24 items-center">
				<div class="w-1/2">
					<div class="mb-3 text-black ">
						<div class="flex gap-x-4 items-center">
							<div class="w-48"><hr></div>
						</div>
						<div class=" text-7xl font-bold">For Team</div>
					</div>
					<div class="text-xl text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
				</div>
				<div class="w-1/2">
					<img src="{{ asset('images/about_us/2.png') }}">
				</div>
			</div>
		</div>
	</section>

	<section class="bg--gray-light w-full overflow-x-hidden py-28">
		<div class="mx-36">
			<div class="flex items-center mb-20">
				<div class="mr-4 "><img class="h-1" src="{{ asset('images/utilities/hr.png') }}"></div>
				<div class="text--pink text-3xl font-bold">Values</div>
			</div>
	
			<div class="flex mb-24 items-center">
				<div class="w-1/2">
					<img src="{{ asset('images/about_us/3.png') }}">
				</div>
				<div class="w-1/2">
					<div class="mb-3 text-black ">
						<div class="flex gap-x-4 items-center">
							<div class="text-3xl">01</div>
							<div class="w-48"><hr></div>
						</div>
						<div class=" text-7xl font-bold">Vision</div>
					</div>
					<div class="text-xl text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
				</div>
			</div>

			<div class="flex justify-between items-center">
				<div class="flex gap-x-4 items-center">
					<div class="bg--pink w-10 h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-2 rounded-full"></div>
				</div>
				<div class="flex gap-x-4 items-center">
					<div class="bg-gray-200 w-10 flex items-center justify-center h-10 rounded-full">
						<img src="{{ asset('images/utilities/prev.png') }}">
					</div>
					<div class="bg-gray-200 w-10 flex items-center justify-center h-10 rounded-full">
						<img src="{{ asset('images/utilities/next.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full overflow-x-hidden py-28">
		<div class="mx-36">
			<div class="flex mb-24 items-center">
				<div class="w-1/2">
					<div class="mb-3 text-black ">
						<div class="flex gap-x-4 items-center">
							<div class="w-48"><hr></div>
						</div>
						<div class=" text-7xl font-bold">Conscious Advertising Network</div>
					</div>
					<div class="text-xl text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
				</div>
				<div class="w-1/2">
					<img src="{{ asset('images/about_us/4.png') }}">
				</div>
			</div>

			<div class="flex mb-24 items-center">
				<div class="w-1/2">
					<img src="{{ asset('images/about_us/5.png') }}">
				</div>
				<div class="w-1/2">
					<div class="mb-3 text-black ">
						<div class="flex gap-x-4 items-center">
							<div class="w-48"><hr></div>
						</div>
						<div class=" text-7xl font-bold">Mentored By Schbang</div>
					</div>
					<div class="text-xl text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
				</div>
			</div>

			
		</div>
	</section>

	<section class="bg--section w-full overflow-x-hidden py-36">
		<div class="mx-36">
			<div class="flex items-center">
				<div class="w-1/2">
					<img src="{{ asset('images/home/join.png') }}" alt="">
				</div>
				<div class="w-1/2">
					<div class="text-7xl font-semibold mb-4">Join the <span class="text--pink">Team</span></div>
					<div class="text--grey-transparent mb-3">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products tofor world-class brands to make your products </div>
					<button class="bg--pink rounded-full text-white py-3 px-10">Explore Profiles</button>
				</div>
			</div>
		</div>
	</section>
@endsection