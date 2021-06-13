@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative ">
		@include('layouts.__navigation')
		<div class="mx-4 md:app-container">
			<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
			<div class="flex flex-col h-full justify-center items-center" style="padding: 20% 0">
				<div class="mx-4 md:mx-0 text-center">
					<div class="text-white font-semibold md:line--height-105c8 text-5xl md:font--size-95 mb-5 text-center">Scalable Infrastructure To Support Your Audacious Ideas</div>
				</div>
				<!-- <div class="block text-center md:hidden text-lg md:text-lg text-white mb-3 uppercase md:normal-case">that next <span class="font-normal md:font-semibold not-italic md:italic">generation</span> will witness</div> -->
				<!-- <div class="text-base md:font--size-22 text-center w-9/12 md:w-5/12 text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div> -->
			</div>
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden py-10 md:pb-20 md:pt--157">
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 flex-col">
				<div class="mb-6 md:mb-10 text-3xl md:font--size-55 font-semibold">About The Service</div>
				<div class="text-base md:font--size-22 line--height-160 text--grey-transparent">Technology and Design is a highly specialised department that deals in ensuring that your brand has the infrastructure in place that can support your marketing efforts and create an effective conversion funnel that positively impacts your ROI.</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container ">
			<div class="flex  mb--95">
				<!-- <div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
				<div class="text--blue text-3xl md:font--size-39 font-bold">Our Process</div>
			</div>
		</div>
		<div class="flex overflow-x-auto pt-5" >
			@php
				$items = [
					[
						'no'=>'01',
						'title'=>'Planning',
						'desc'=>"SThis is where we define goals, what we will measure success, define needs, consider improving existing processes, and explore the available options before defining the Scope of Work (SOW).."
					],
					[
						'no'=>'02',
						'title'=>'Implement',
						'desc'=>"We then start with implementing the SOW, and configure the required technologies. We then move to data migration, define usage and support, and at the time of delivery train the users."
					],
					[
						'no'=>'03',
						'title'=>'Measure',
						'desc'=>"At the start of the project, we defined what success would look like. At the end of the project, we take a look at what we've done to see if we've achieved that. We then come up with a set of measures and an ongoing process to track how well things are working."
					],
				]
			@endphp
			@foreach($items as $item)
			<div style="min-width: 100vw;">
				<div class="block md:flex mx-4 md:app-container">
					<div class="w-full md:w-1/2">
						<img class="max-h-80 max-w-full" src="{{ asset('images/opportunities/2.png') }}">
					</div>
					<div class="w-full md:w-1/2">
						<div class="mb-3 text-black ">
							<div class="flex gap-x-4 items-center">
								<div class="text-2xl md:font--size-30">{{$item['no']}}</div>
								<div class="w-48"><hr></div>
							</div>
							<div class=" text-3xl mt-3 md:mt--11 mb-6 md:mb--34 md:font--size-65 font-bold md:line--height-107c84">{{$item['title']}}</div>
						</div>
						<div class="text-base md:font--size-20 line--height-160 text--gray mb-4">{{$item['desc']}}</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="mx-4 md:app-container ">
			<div class="flex justify-between items-center">
				<div class="flex gap-x-4 items-center">
					<div class="bg--blue w-10 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
				</div>
				<div class="flex gap-x-4 items-center">
					<div class="bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/prev.png') }}">
					</div>
					<div class="bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/next.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full overflow-x-hidden py-10 md:pb-20 md:pt--171">
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 flex-col">
				<div class="mb-6 md:mb-10 text-3xl md:font--size-75 font-semibold">What’s all Included</div>
				<!-- <div class="text-base md:font--size-22 line--height-160 text--gray">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div> -->
			</div>
		</div>

		@php
		$items = [
			[
			'slug'=>'website-development',
			'title'=>'Website Development',
			'desc'=>"Performance driven website to convert your customers."
			],
			[
			'slug'=>'ar-vr-solutions',
			'title'=>'AR/VR Solutions',
			'desc'=>"Power of mixed reality for experiential marketing."
			],
			[
			'slug'=>'search-and-voice-endine-optimization',
			'title'=>'Search and Voice Engine Optimization',
			'desc'=>"Optimize to rank high on both audio and visual platforms."
			],
			[
			'slug'=>'crm-systems',
			'title'=>'CRM Systems',
			'desc'=>"All you data in one place for creating powerful marketing programs."
			],
		];
		@endphp
		<div class="relative mx-10">
			<div class="mx-0 md:mx-10 space-area">
				<div class="block md:flex">
					
					@foreach($items as $item)
					<div class="space-item">
						<div class="border-b md:border-b-0 border-r-0 md:border-r border-gray-200 px-5 py-10">
							<div class="flex justify-center items-start py-10">
								<img  src="{{ asset('images/utilities/'.$item['slug'].'.png') }}" alt="">
							</div>
							<div class="flex flex-col justify-center text-center">
								<div class="text-lg md:font--size-26 font-semibold mb-3">{{$item['title']}}</div>
								<div class="md:font--size-17 text--gray">{{$item['desc']}}</div>
							</div>
						</div>
					</div>
					@endforeach
	
				</div>
			</div>
			<button class="hidden md:flex absolute transform -translate-y-1/2 top-1/2 left-0 bg-gray-200 w-10 h-10 md:w--64 md:h--64 items-center justify-center rounded-full">
				<img src="{{ asset('images/utilities/prev.png') }}">
			</button>
			<button class="hidden md:flex absolute transform -translate-y-1/2 top-1/2 right-0 bg-gray-200 w-10 h-10 md:w--64 md:h--64 items-center justify-center rounded-full">
				<img src="{{ asset('images/utilities/next.png') }}">
			</button>
		</div>
	</section>

	<section class="bg--section py-20">
		<div class="mx-4 md:app-container">
			<div class="px-10 py-20 bg--blue rounded-xl">
				<div class="text-white text-3xl md:font--size-65 mb-10">Case Studies </div>
				<div class="mb-10 text-white font--poppins text-base md:font--size-17" style="opacity: .5;line-height: 1.8;">
					Our work that can be measured in business impact.
				</div>
				<a href="//www.behance.net/felicityhq" target="_blank" class="flex justify-center items-center bg-white rounded-full text-sm md:font--size-18 text--blue w-32 h-12 md:w--244 md:h--60">See Our Work</a>
			</div>
		</div>
	</section>
	<!-- <section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:container--case-studies pt-20">
			<div class="flex mb-4 md:mb--89 flex-col">
				<div class="mb-4 md:mb-10 text-3xl md:font--size-75 font-semibold">Case Studies</div>
				<div class="text-base md:font--size-22 line--height-160 text--gray">
					for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to
				</div>
			</div>

			<a href="{{ url('case-studies-2') }}" class="bg-white rounded-t-2xl rounded-b-2xl mb-10 md:block md:mb-14">
				<img class="h-80 w-full object-cover object-center rounded-t-2xl" src="{{ asset('images/case_studies/ilus.png') }}" alt="">
				<div class="px-10 pt--42 pb--68 rounded-b-2xl">
					<div class="flex justify-between mb-3">
						<div class="text-2xl text--color-team md:font--size-42 mb-2 font--gilroy-bold">Roady V3.0 Ilustration</div>
						<div class="text-base text--color-team md:font--size-16 font--gilroy-md">FEATURED</div>
					</div>
					
					<div class="text--blue md:font--size-17 mb-2 font-bold" 
					style="letter-spacing: 0.07em; line-height: 100.84%;">ILLUSTRATION DESIGN</div>
					<div class="text-base md:font--size-17 text--grey-transparent" style="line-height: 1.8;opacity: .8">for world-class brands to make your products to live for world-class brands to make your products to live for <br> world-class brands to make your products to</div>
				</div>
			</a>
		</div>
	</section> -->

	<section  class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container pt-20">
			<div class="w-full md:mb--140">
				<div class="text-3xl md:font--size-65 font-semibold mb-4 md:mb-10">Work with us for a <span class="text--blue">Project ?</span></div>
				<div class="text-base font--poppins md:font--size-17 w-full md:w-3/4 " 
				style="
				line-height: 192.8%;
				letter-spacing: 0.02em;
				color: rgba(55, 55, 55, 0.46);
				opacity: 0.8;">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
			</div>

			<form action="">
				<div class="flex flex-col gap-y-4 md:gap-y-0 mb-5">
					<div class="mb--43">
						<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg--form-cap-inside focus:outline-none" placeholder="Email Address" style="border-radius: 15px">
					</div>
					<div class="mb--43">
						<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg--form-cap-inside focus:outline-none" placeholder="Full Name" style="border-radius: 15px">
					</div>

					<div class="mb--43">
						<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg--form-cap-inside focus:outline-none" placeholder="Phone Number" style="border-radius: 15px">
					</div>
					<div class="mb--43">
						<input type="text" class="text--gray-dark w-full p-3 md:padding--form-we-have md:font--size-19 bg--form-cap-inside focus:outline-none" placeholder="Reason to contact" style="border-radius: 15px">
					</div>
					<button class="w-full py-3 md:padding-button-have-a md:font--size-21 font--gilroy-md text-white text-center bg--blue"
					style="border-radius: 19px">Send</button>
				</div>
			</form>
		</div>
	</section>

@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush