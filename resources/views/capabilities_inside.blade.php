@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative ">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center" style="padding: 25% 0">
			<div class="mx-4 md:mx-0 text-center">
				<div class="text-white font-semibold md:line--height-105c8 text-5xl md:font--size-95 mb-5 text-center"> Branding at it’s <br> best at Felicity</div>
			</div>
			<div class="block text-center md:hidden text-lg md:text-lg text-white mb-3 uppercase md:normal-case">that next <span class="font-normal md:font-semibold not-italic md:italic">generation</span> will witness</div>
			<div class="text-base md:font--size-22 text-center w-9/12 md:w-5/12 text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 flex-col">
				<div class="mb-6 md:mb-10 text-3xl md:font--size-55 font-semibold">About The Service</div>
				<div class="text-base md:font--size-22 line--height-160 text--grey-transparent">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
			</div>
		</div>
	</section>

	<section class="bg--gray-light w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="flex items-center mb-20">
				<div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div>
				<div class="text--pink text-3xl md:font--size-39 font-bold">Our Process</div>
			</div>
	
			<div class="block md:flex mb-24">
				<div class="w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/capabilities/brain.png') }}">
				</div>
				<div class="w-full md:w-1/2">
					<div class="mb-3 text-black ">
						<div class="flex gap-x-4 items-center">
							<div class="text-2xl mb-2 md:mb-10 md:font--size-30">01</div>
							<div class="w-48"><hr></div>
						</div>
						<div class="text-3xl mb-4 md:mb-10  md:font--size-85 font-bold">Brainstroming</div>
					</div>
					<div class="text-base md:font--size-22 line--height-160 text--gray mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
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
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 flex-col">
				<div class="mb-6 md:mb-10 text-3xl md:font--size-75 font-semibold">What’s all Included</div>
				<div class="text-base md:font--size-22 line--height-160 text--gray">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
			</div>
		</div>

		<div class="relative mx-10">
			<div class="mx-0 md:mx-10">
				<div class="block md:flex gap-x-10">
					<div class="border-b md:border-b-0 border-r-0 md:border-r border-gray-200 px-5 py-10 shadow-lg">
						<div class="flex justify-center items-start py-10">
							<img  src="{{ asset('images/utilities/guide.png') }}" alt="">
						</div>
						<div class="flex flex-col justify-center text-center">
							<div class="text-lg md:font--size-26 font-semibold mb-3">Branding Guide</div>
							<div class="md:font--size-17 text--gray">Engineering technologies that bring people together in the real world is both inspiring and daunting. </div>
						</div>
					</div>
	
					<div class="border-b md:border-b-0 border-r-0 md:border-r border-gray-200 px-5 py-10 shadow-lg">
						<div class="flex justify-center items-start py-10">
							<img  src="{{ asset('images/utilities/text.png') }}" alt="">
						</div>
						<div class="flex flex-col justify-center text-center">
							<div class="text-lg md:font--size-26 font-semibold mb-3">Typography</div>
							<div class="md:font--size-17 text--gray">Engineering technologies that bring people together in the real world is both inspiring and daunting. </div>
						</div>
					</div>
					
					<div class="border-b md:border-b-0 border-r-0 md:border-r border-gray-200 px-5 py-10 shadow-lg">
						<div class="flex justify-center items-start py-10">
							<img  src="{{ asset('images/utilities/color.png') }}" alt="">
						</div>
						<div class="flex flex-col justify-center text-center">
							<div class="text-lg md:font--size-26 font-semibold mb-3">Color Schemes</div>
							<div class="md:font--size-17 text--gray">Engineering technologies that bring people together in the real world is both inspiring and daunting. </div>
						</div>
					</div>
	
				</div>
			</div>
			
			<button class="hidden md:flex absolute transform -translate-y-1/2 top-1/2 left-0 bg-gray-200 w-10 items-center justify-center h-10 rounded-full">
				<img src="{{ asset('images/utilities/prev.png') }}">
			</button>
			<button class="hidden md:flex absolute transform -translate-y-1/2 top-1/2 right-0 bg-gray-200 w-10 items-center justify-center h-10 rounded-full">
				<img src="{{ asset('images/utilities/next.png') }}">
			</button>
		</div>
	</section>


	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="flex mb-10 flex-col">
				<div class="mb-6 md:mb-10 text-3xl md:text-5xl font-semibold">Case Studies</div>
				<div class="text-base md:text-lg text--gray">for world-class brands to make your products to live for world-class brands to make your products to live for world-class 
					<br> brands to make your products to for world-class brands to make your . </div>
			</div>

			<a href="{{ url('case-studies-2') }}" class="bg-white rounded-b-lg mb-10 md:block shadow-lg">
				<img class="h-48 mb-4 w-full object-cover object-center rounded-t-lg" src="{{ asset('images/case_studies/ilus.png') }}" alt="">
				<div class="p-5 rounded-b-lg">
					<div class="flex justify-between mb-2">
						<div class="text-xl md:font--size-32 font-semibold">Roady V3.0 Ilustration</div>
						<div class="text-base md:font--size-16">FEATURED</div>
					</div>
					
					<div class="text--pink md:font--size-17 font-semibold mb-1">ILLUSTTRATION DESIGN</div>
					<div class="text-base md:font--size-17 text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
				</div>
			</a>

		</div>
	</section>

	<section  class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="w-full mb-10">
				<div class="text-3xl md:font--size-65 font-semibold mb-6 md:mb-10">Work with us for a <span class="text--pink">Project ?</span></div>
				<div class="text-base md:font--size-17 w-full md:w-3/4 line--height-160 text-gray-400">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
			</div>

			<form action="">
				<div class="mb-7">
					<input type="text" class="placeholder-black rounded-lg md:rounded-2xl w-full md:font--size-19 p-3 bg--gray-light focus:outline-none" placeholder="Email Address">
				</div>
				<div class="mb-7">
					<input type="text" class="placeholder-black rounded-lg md:rounded-2xl w-full md:font--size-19 p-3 bg--gray-light focus:outline-none" placeholder="Full Name">
				</div>
				<div class="mb-7">
					<input type="text" class="placeholder-black rounded-lg md:rounded-2xl w-full md:font--size-19 p-3 bg--gray-light focus:outline-none" placeholder="Phone Number">
				</div>
				<div class="mb-7">
					<input type="text" class="placeholder-black rounded-lg md:rounded-2xl w-full md:font--size-19 p-3 bg--gray-light focus:outline-none" placeholder="Reason to contact">
				</div>
				
				<button class="w-full py-3 text-white text-center rounded-lg md:rounded-2xl bg--pink">Send</button>
			</form>
		</div>
	</section>
@endsection