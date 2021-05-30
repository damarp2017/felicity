@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative height--90vh">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center text-center">
			<div class="text-white font-semibold text-5xl md:font--size-150 mb-5 text-center"> About Us</div>
			<div class="text-base md:font--size-22 text-white opacity-50 w-1/2">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy .</div>
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20 ">
		<div class="mx-4 md:mx-36">
			<div class="block md:flex mb-10 flex-col">
				<div class="mb-6 text-3xl md:font--size--55 font-semibold">Vision</div>
				<div class="text-base md:font--size-22 text--grey-transparent">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:mx-36">
			<div class="block md:flex mb-10 md:mb-24 items-center">
				<div class="w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/about_us/1.png') }}">
				</div>
				<div class="w-full md:w-1/2">
					<div class="mb-3 text-black ">
						<div class="text-3xl font-bold md:font--size-75 md:mb-10">For Company</div>
					</div>
					<div class="text-base md:font--size-22 text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
				</div>
			</div>

			<div class="block md:flex mb-10 items-center">
				<div class="block md:hidden w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/about_us/2.png') }}">
				</div>
				<div class="w-full md:w-1/2">
					<div class="mb-3 text-black ">
						<div class="text-3xl font-bold md:font--size-75 md:mb-10">For Team</div>
					</div>
					<div class="text-base md:font--size-22 text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
				</div>
				<div class="hidden md:block w-full md:w-1/2">
					<img src="{{ asset('images/about_us/2.png') }}">
				</div>
			</div>
		</div>
	</section>

	<section class="bg--gray-light w-full overflow-x-hidden py-10 md:py-20 ">
		<div class="mx-4 md:mx-36">
			<div class="flex items-center mb-10 md:mb-20">
				<div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div>
				<div class="text--pink text-2xl md:font--size-39 font-bold">Values</div>
			</div>
	
			<div class="block md:flex mb-24 items-center">
				<div class="w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/about_us/3.png') }}">
				</div>
				<div class="w-full md:w-1/2">
					<div class="mb-3 text-black ">
						<div class="flex gap-x-4 items-center">
							<div class="text-2xl md:font--size-30">01</div>
							<div class="w-48"><hr></div>
						</div>
						<div class="text-3xl md:my-10 font-bold md:font--size-100">Vision</div>
					</div>
					<div class="text-base md:font--size-22 text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
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

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:mx-36">
			<div class="block md:flex mb-24 items-center">
				<div class="block md:hidden w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/about_us/4.png') }}">
				</div>
				<div class="w-full md:w-1/2">
					<div class="mb-3 text-black ">
						<div class=" text-3xl md:font--size-80 font-bold md:mb-10 md:line--height-99c34">Conscious Advertising Network</div>
					</div>
					<div class="text-base md:font--size-22 text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
				</div>
				<div class="hidden md:block w-full md:w-1/2">
					<img src="{{ asset('images/about_us/4.png') }}">
				</div>
			</div>

			<div class="block md:flex mb-24 items-center">
				<div class="w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/about_us/5.png') }}">
				</div>
				<div class="w-full md:w-1/2">
					<div class="mb-3 text-black ">
						<div class="text-3xl md:font--size-80 font-bold md:mb-10 md:line--height-99c34">Mentored By Schbang</div>
					</div>
					<div class="text-base md:font--size-22 text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
				</div>
			</div>

			
		</div>
	</section>

	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:mx-36">
			<div class="blcok md:flex items-center">
				<div class="w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/home/join.png') }}" alt="">
				</div>
				<div class="w-full md:w-1/2">
					<div class="text-3xl md:font--size-75 font-semibold mb-10">Join the <span class="text--pink">Team</span></div>
					<div class="text-base md:font--size-22 text--grey-transparent mb-10">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products tofor world-class brands to make your products </div>
					<a href="{{ url('opportunities') }}" class="bg--pink rounded-full text-sm md:font--size-18 text-white py-3 md:py-5 px-8 md:px-10">Explore Profiles</a>
				</div>
			</div>
		</div>
	</section>
@endsection