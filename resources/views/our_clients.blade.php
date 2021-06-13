@extends('layouts.app')
@section('content')
	<section class="bg--gray-light pb-20">
		<header class="w-full overflow-x-hidden bg--blue relative">
			@include('layouts.__navigation')
			<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
			<div class="mx-4 h-full md:app-container" style="padding: 13% 0">
				<div class="flex flex-col justify-center items-center md:items-start h-full ">
					<div class="text-white font-semibold mb-3 text-5xl md:font--size-95">Our Clients</div>
					<div class="text-base md:font--size-15 text-center md:text-left w-9/12 md:w-full font--poppins "
					style="letter-spacing: 0.02em;color: rgba(255, 255, 255, 0.46);opacity: 0.8; line-height: 192.8%;">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
			   </div>
			</div>
		</header>
	
		<div class="mx-4 md:mx--79">
			<div class="bg-white mb-16 -mt-10 md:-mt-28 relative z-10 " style="border-radius: 20px">
				<div class="grid grid-cols-3">
					<div class="flex justify-center items-center py-16 md:py--75 md:px--112 border-b border-r border-gray-100">
						<img class="h-8 md:h-auto" src="{{ asset('images/clients/1.png') }}" alt="">
					</div>
					<div class="flex justify-center items-center py-16 md:py--75 md:px--112 border-b border-r border-gray-100">
						<img class="h-8 md:h-auto" src="{{ asset('images/clients/2.png') }}" alt="">
					</div>
					<div class="flex justify-center items-center py-16 md:py--75 md:px--112 border-b border-gray-100">
						<img class="h-8 md:h-auto" src="{{ asset('images/clients/3.png') }}" alt="">
					</div>

					<div class="flex justify-center items-center py-16 md:py--75 md:px--112 border-b border-r border-gray-100">
						<img class="h-8 md:h-auto" src="{{ asset('images/clients/4.png') }}" alt="">
					</div>
					<div class="flex justify-center items-center py-16 md:py--75 md:px--112 border-b border-r border-gray-100">
						<img class="h-8 md:h-auto" src="{{ asset('images/clients/5.png') }}" alt="">
					</div>
					<div class="flex justify-center items-center py-16 md:py--75 md:px--112 border-b border-gray-100">
						<img class="h-8 md:h-auto" src="{{ asset('images/clients/6.png') }}" alt="">
					</div>

					<div class="flex justify-center items-center py-16 md:py--75 md:px--112 border-b border-r border-gray-100">
						<img class="h-8 md:h-auto" src="{{ asset('images/clients/7.png') }}" alt="">
					</div>
					<div class="flex justify-center items-center py-16 md:py--75 md:px--112 border-b border-r border-gray-100">
						<img class="h-8 md:h-auto" src="{{ asset('images/clients/8.png') }}" alt="">
					</div>
					<div class="flex justify-center items-center py-16 md:py--75 md:px--112 border-b border-gray-100">
						<img class="h-8 md:h-auto" src="{{ asset('images/clients/9.png') }}" alt="">
					</div>
				</div>
			</div>


			<div class="bg-white p-10 relative z-10 rounded-3xl">
				<div class="flex flex-col justify-center items-center text-center">
					<div class="font-bold text-3xl md:font--size-45 mb-4">Want to join the list by <br> becoming a client</div>
					<div class="mb-3 md:font--size-22 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis <br> diam elementum arcu eu cras egestas ac adipiscing.</div>
					<a href="//calendly.com/felicityhq/hello" target="_blank" class="text-white md:font--size-15 bg--gradient-black rounded-full py-3 px-10">Book A Free Consultation Call</a>
				</div>
			</div>
		</div>
	</section>
	
@endsection