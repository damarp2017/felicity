@extends('layouts.app')
@section('content')
	<section class="bg--gray-light pb-20">
		<header class="w-full overflow-x-hidden bg--header-gradient relative" style="height: 999px">
			@include('layouts.__navigation')
			<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
			<div class="flex flex-col h-full justify-center items-center">
				<div class="mx-36">
					<div class="text-white font-semibold mb-3 text-9xl">Our Clients</div>
					<div class="text-xl text-white opacity-50">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
				</div>
			</div>
		</header>
	
		<div class="mx-36">
			<div class="bg-white mb-16 -mt-36 relative z-10 rounded-3xl">
				<div class="flex">
					<div class="flex-1 flex justify-center items-center py-20 border-b border-r border-gray-200">
						<img src="{{ asset('images/clients/1.png') }}" alt="">
					</div>
					<div class="flex-1 flex justify-center items-center py-20 border-b border-r border-gray-200">
						<img src="{{ asset('images/clients/2.png') }}" alt="">
					</div>
					<div class="flex-1 flex justify-center items-center py-20 border-b border-gray-200">
						<img src="{{ asset('images/clients/3.png') }}" alt="">
					</div>
				</div>
				<div class="flex">
					<div class="flex-1 flex justify-center items-center py-20 border-b border-r border-gray-200">
						<img src="{{ asset('images/clients/4.png') }}" alt="">
					</div>
					<div class="flex-1 flex justify-center items-center py-20 border-b border-r border-gray-200">
						<img src="{{ asset('images/clients/5.png') }}" alt="">
					</div>
					<div class="flex-1 flex justify-center items-center py-20 border-b border-gray-200">
						<img src="{{ asset('images/clients/6.png') }}" alt="">
					</div>
				</div>
				<div class="flex">
					<div class="flex-1 flex justify-center items-center py-20 border-b border-r border-gray-200">
						<img src="{{ asset('images/clients/7.png') }}" alt="">
					</div>
					<div class="flex-1 flex justify-center items-center py-20 border-b border-r border-gray-200">
						<img src="{{ asset('images/clients/8.png') }}" alt="">
					</div>
					<div class="flex-1 flex justify-center items-center py-20 border-b border-gray-200">
						<img src="{{ asset('images/clients/9.png') }}" alt="">
					</div>
				</div>
			</div>


			<div class="bg-white p-10 relative z-10 rounded-3xl">
				<div class="flex flex-col justify-center items-center text-center">
					<div class="font-bold text-3xl mb-4">Want to join the list by <br> becoming a client</div>
					<div class="mb-3 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis <br> diam elementum arcu eu cras egestas ac adipiscing.</div>
					<button class="text-white bg--gradient-black rounded-full py-3 px-10">Book A Free Consultation Call</button>
				</div>
			</div>
		</div>
	</section>
	
@endsection