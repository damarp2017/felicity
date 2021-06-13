@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative">
		@include('layouts.__navigation')
		<div class="mx-4 md:app-container">
			<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
			<div class="flex flex-col h-96 md:h-screen justify-center items-center text-center" >
				<h1 class="text-white font-semibold text-4xl md:line--height-97 md:font--size-100 mb-5 md:mb-0 text-center"> On a journey to take India to the world</h1>
				<!-- <div class="text-sm md:font--size-20 text-white opacity-50 w-3/4"></div> -->
			</div>
		</div>
	</header>

	<section class="bg--section w-full overflow-x-hidden py-10 md:pb-20 md:pt--137">
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 flex-col">
				<h2 class="mb-6 text-3xl md:font--size-55 font-semibold">Vision</h2>
				<div class="text-sm md:font--size-20 line--height-160 " style="color: #898989">It is our constant endeavour to help businesses grow and evolve over time and to be able to achieve it, we want to work with people that synergise with the values that we strongly imbibe in every thing we do here at Felicity.</div>
			</div>
		</div>
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 md:mb-24 items-center">
				<div class="w-full md:w--475 md:h--490">
					<img class="h-auto md:w-full" src="{{ asset('images/about_us/1.png') }}">
				</div>
				<div class="hidden md:block md:w--109"></div>

				<div class="w-full md:w--636">
					<div class="mb-3 text-black ">
						<h2 class="text-3xl font-bold md:font--size-67 md:mb--27" style="line-height:1">For the Company</h2>
					</div>
					<div class="text-sm md:font--size-19 text--gray line--height-160 mb-4">Our vision is to take India to the world - capture its culture, its people, its expertise, and its diversity to enable other markets to enrich and inculcate Indian values; to make India a front-runner in advertising.</div>
				</div>
			</div>

			<div class="block md:flex mb-10 items-center">
				<div class="block md:hidden w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/about_us/2.png') }}">
				</div>
				<div class="w-full md:w--632">
					<div class="mb-3 text-black ">
						<h2 class="text-3xl font-bold md:font--size-67 md:mb--27" style="line-height:1">For the Team</h2>
					</div>
					<div class="text-sm md:font--size-19 text--gray line--height-160 mb-4">We want to create world leaders who are willing to disrupt the Indian Advertising Industry and help our partners creatively share their products and services with the world.</div>
				</div>
				<div class="w--48"></div>
				<div class="hidden md:block md:w--579">
					<img class="md:h-full" src="{{ asset('images/about_us/2.png') }}">
				</div>
			</div>
		</div>
	</section>

	@include('components.values-section')

	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 md:mb-24 items-center">
				<div class="block md:hidden w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/about_us/4.webp') }}">
				</div>
				<div class="w-full md:w--549">
					<div class="mb-3 text-black ">
						<h2 class=" text-3xl md:font--size-70 font-bold md:mb-10 md:line--height-99c34">Conscious Advertising Network</h2>
					</div>
					<div class="text-sm md:font--size-20 line--height-160 text--gray mb-4">The Conscious Advertising Network is a voluntary coalition of over 70 organisations set up to ensure that industry ethics catches up with the technology of modern advertising.</div>
				</div>
				<div class="hidden md:block md:w--186"></div>
				<div class="hidden md:block md:w--459">
					<img src="{{ asset('images/about_us/4.webp') }}">
				</div>
			</div>

			<div class="block md:flex mb-10 md:mb-24 items-center">
				<div class="w-full md:w--388 ">
					<img class="h-auto md:h-auto" src="{{ asset('images/about_us/5.png') }}">
				</div>
				<div class="hidden md:block md:w--191"></div>
				<div class="w-full md:w--607">
					<div class="mb-3 text-black ">
						<h2 class="text-3xl md:font--size-70 font-bold md:line--height-99c34">Mentored By Schbang</h2>
					</div>
					<div class="text-sm md:font--size-20 line--height-160 text--gray mb-4">With a common vision of taking India to the world, we are mentored by India’s fastest growing agency and are proud to be a part of the Schbang Network. With this, we continue to build a strong mesh of creative companies on a common mission.</div>
				</div>
			</div>

			
		</div>
	</section>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container md:pt-20">
			<div class="block md:flex items-center">
				<div class="w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/home/join.png') }}" alt="">
				</div>
				<div class="w-full md:w-1/2">
					<h2 class="text-3xl md:font--size-75 font-semibold mb-4 md:mb-10">Join the <span class="text--blue">Team</span></h2>
					<div class="text-sm md:font--size-20 text--gray mb-10 md:mb-14" style="line-height: 160%;">Our vision of taking India to the world is impossible without the help of honest, talented, and purpose driven individuals. We are on a constant lookout for people that believe in the power of ideas and dare to change the world with their own.</div>
					<a href="{{ url('opportunities') }}" class="flex justify-center items-center bg--blue rounded-full text-sm md:font--size-18 text-white w-32 h-12 md:w--244 md:h--60">Explore Profiles</a>
				</div>
			</div>
		</div>

	</section>
@endsection