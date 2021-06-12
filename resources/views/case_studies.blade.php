@extends('layouts.app')
@section('content')
<section class="bg-white pb-10">
	<header class="w-full overflow-x-hidden bg--header-gradient">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center md:-mt--49 py-48 md:p--20pc">
			<div class="text-white font-semibold text-5xl md:font--size-100 mb-5 md:line--height-97 text-center"> Case Studies</div>
			<div class="text-base md:font--size-22 mb-5 md:mb-0 text-center text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam
				elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
			<button class="flex md:hidden hover:bg-gray-100 p-4 justify-center items-center rounded-2xl bg-gray-50">
				<img src="{{ asset('images/utilities/filter.png') }}" alt="">
			</button>
		</div>
		<button class="hidden md:flex absolute top-1/3 right-0 mr--65 hover:bg-gray-100 transform translate-y-1/2 h-10 w-10 md:w--64 md:h--64 justify-center items-center bg-white"
			style="border-radius: 20px;">
			<img class="h-4 w-4 md:w--24 md:h--22" src="{{ asset('images/utilities/filter.png') }}" alt="">
		</button>
	</header>

	<div class="-mt-40 md:-mt-28">
		<div class="mx-4 md:mx--65">
			@for ($i = 0; $i < 3; $i++)
			<a href="{{ url('case-studies-2') }}" class="bg-white rounded-t-2xl rounded-b-2xl mb-10 md:block md:mb-14"
			style="box-shadow: 0px -11px 81px rgba(248, 248, 248, 0.25), 0px 59px 46px rgba(233, 233, 233, 0.25);">
				<img class="h-80 w-full object-cover object-center rounded-t-2xl" src="{{ asset('images/case_studies/ilus.png') }}" alt="">
				<div class="px-10 pt--42 pb--68 rounded-b-2xl">
					<div class="flex justify-between mb-3">
						<div class="text-2xl text--color-team md:font--size-42 mb-2 font--gilroy-bold">Roady V3.0 Ilustration</div>
						<div class="text-base text--color-team md:font--size-16 font--gilroy-md">FEATURED</div>
					</div>
					
					<div class="text--pink md:font--size-17 mb-2 font-bold" 
					style="letter-spacing: 0.07em; line-height: 100.84%;">ILLUSTRATION DESIGN</div>
					<div class="text-base md:font--size-17 text--grey-transparent" style="line-height: 1.8;opacity: .8">for world-class brands to make your products to live for world-class brands to make your products to live for <br> world-class brands to make your products to</div>
				</div>
			</a>
			@endfor
		</div>
	</div>
</section>


<section  class="bg--section w-full overflow-x-hidden py-10 md:py-20">
	<div class="mx-4 md:app-container pt-0 md:pt-20">
		<div class="w-full mb-3 md:mb--140">
			<div class="text-3xl md:font--size-65  w-8/12 md:w-full font-semibold mb-4 md:mb-10">Have a <span class="text--pink">Project</span> Idea ?</div>
			<div class="text-base font--poppins md:font--size-17 w-full md:w-3/4 " 
			style="
			line-height: 192.8%;
			letter-spacing: 0.02em;
			color: rgba(55, 55, 55, 0.46);
			opacity: 0.8;">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
		</div>

		<form action="">
			<div class="flex flex-col gap-y-4 md:gap-y-0 mb-5">
				<div class=" mb-1 md:b--43">
					<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg-white focus:outline-none" placeholder="Email Address" style="border-radius: 15px">
				</div>
				<div class=" mb-1 md:b--43">
					<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg-white focus:outline-none" placeholder="Full Name" style="border-radius: 15px">
				</div>

				<div class=" mb-1 md:b--43">
					<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg-white focus:outline-none" placeholder="Phone Number" style="border-radius: 15px">
				</div>
				<div class=" mb-1 md:b--43">
					<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg-white focus:outline-none" placeholder="Reason to contact" style="border-radius: 15px">
				</div>
				<button class="w-full py-3 md:padding-button-have-a md:font--size-21 font--gilroy-md text-white text-center bg--pink"
				style="border-radius: 19px">Send</button>
			</div>
		</form>
	</div>
</section>

@endsection