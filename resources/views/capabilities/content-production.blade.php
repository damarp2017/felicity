@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative ">
		@include('layouts.__navigation')
		<div class="mx-4 md:app-container">
			<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-screen"> -->
			<div class="flex flex-col h-screen-2/3 md:h-screen justify-center items-center" logo/black.png?new>
				<div class="mx-4 md:mx-0 text-center">
					<h1 class="text-white font-semibold md:line--height-105c8 text-3xl md:font--size-95 mb-5 text-center">You'll Never Do Content The Same Way Again</h1>
				</div>
				<!-- <div class="block text-center md:hidden text-lg md:text-lg text-white mb-3 uppercase md:normal-case">that next <span class="font-normal md:font-semibold not-italic md:italic">generation</span> will witness</div> -->
				<!-- <div class="text-base md:font--size-20 text-center w-9/12 md:w-5/12 text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div> -->
			</div>
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="block md:flex flex-col">
				<h2 class="mb-6 md:mb-10 text-3xl md:font--size-55 font-semibold">About The Service</h2>
				<div class="text-base md:font--size-20 line--height-160 text--gray">In today's time, defined deliverables are not going to deliver brand growth. We're here to break the old ways of working. We fire many ideas, watch what works, and then go all in.</div>
			</div>
		</div>
	</section>

	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container ">
			<div class="flex  mb-20">
				<!-- <div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
				<h2 class="text--blue text-3xl md:font--size-39 font-bold">Our Process</h2>
			</div>
			<div class="flex flex-wrap">
				<div class="w-full md:w-1/3">
					<div >
						<img class="max-h-80 max-w-full" src="{{ asset('images/capabilities/content-production.png') }}">
					</div>
				</div>
				<div class="w-full md:w-2/3">
					<div class="flex overflow-x-auto pt-5 slider space-area" id="process-slider">
						@php
							$items = [
								[
									'no'=>'01',
									'title'=>'Plan',
									'desc'=>"Specifying the details of creating, publishing, distributing and measuring a content production plan."
								],
								[
									'no'=>'02',
									'title'=>'Create',
									'desc'=>"The content will be sourced from contributors, including internal staff and external groups such as customers and third-party thought leaders, during the creation process."
								],
								[
									'no'=>'03',
									'title'=>'Publish',
									'desc'=>"Specifying a list of final content assets that will be supported as part of the content production plan"
								],
								[
									'no'=>'04',
									'title'=>'Distribute',
									'desc'=>"Once content is published, it will then be distributed using both earned and paid tactics available including search engine optimization, paid search, social sharing, word of mouth, advertising and email marketing."
								],
								[
									'no'=>'05',
									'title'=>'Analyze',
									'desc'=>"Analyzing metrics that convey how content is performing in terms of traffic acquisition, engagement, and at various conversion points from lead to customer. Metrics also include brand uplift, search engine referrals, social activity and lead conversion rates."
								],
							]
						@endphp
						@foreach($items as $item)
						<div style="min-width: 50vw;" class="space-item-1 px-2 md:px-10 ">
							<div class="mb-3 text-black ">
								<div class="flex gap-x-4 items-center">
									<div class="text-2xl md:font--size-30">{{$item['no']}}</div>
									<div class="w-48"><hr></div>
								</div>
								<h2 class=" text-3xl mt-3 md:mt--11 mb-6 md:mb--34 md:font--size-65 font-bold md:line--height-107c84">{{$item['title']}}</h2>
							</div>
							<div class="text-base md:font--size-20 line--height-160 text--gray mb-4">{{$item['desc']}}</div>
								
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		
		<div class="mx-4 md:app-container ">
			<div class="flex justify-between items-center">
				<div class="flex gap-x-2 items-center slider-dot">
					<div class="bg--blue w-10 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
				</div>
				<div class="flex gap-x-4 items-center">
					<div class="bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full slider-control" target="#process-slider" action="prev">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/prev.png') }}">
					</div>
					<div class="bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full slider-control" target="#process-slider" action="next">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/next.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 flex-col">
				<h2 class="text-3xl md:font--size-75 font-semibold leading-normal">What’s all Included</h2>
				<!-- <div class="text-base md:font--size-20 line--height-160 text--gray">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div> -->
			</div>
		</div>

		@php
		$items = [
			[
			'slug'=>'sonic-branding',
			'title'=>'Sonic Branding',
			'desc'=>"Adapting to the ever evolving customer audio consumption patterns. "
			],
			[
			'slug'=>'video-production',
			'title'=>'Video Production ',
			'desc'=>"Video content to convey your communication effectively to your customers."
			],
			[
			'slug'=>'podcast-production',
			'title'=>'Podcast Production ',
			'desc'=>"Dive into the hottest way of consuming content in 21st century. "
			],
			[
			'slug'=>'editing-animation',
			'title'=>'Editing & Animation',
			'desc'=>"Brands, like people, have their own distinct ways of expressing themselves."
			],
		];
		@endphp
		<div class="relative mx-10">
			<div class="mx-0 md:mx-10 space-area">
				<div class="block md:flex slider overflow-x-auto" id="included-slider">
					
					@foreach($items as $item)
					<div class="space-item" style="min-width:50vw;">
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
			<button class="hidden md:flex absolute transform -translate-y-1/2 top-1/2 left-0 bg-gray-200 w-10 h-10 md:w--64 md:h--64 items-center justify-center rounded-full  slider-control" target="#included-slider" action="prev">
				<img src="{{ asset('images/utilities/prev.png') }}">
			</button>
			<button class="hidden md:flex absolute transform -translate-y-1/2 top-1/2 right-0 bg-gray-200 w-10 h-10 md:w--64 md:h--64 items-center justify-center rounded-full slider-control" target="#included-slider" action="next">
				<img src="{{ asset('images/utilities/next.png') }}">
			</button>
		</div>
	</section>

	@include('components.case-studies-insights-section')
	<!-- <section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:container--case-studies pt-20">
			<div class="flex mb-4 md:mb--89 flex-col">
				<div class="mb-4 md:mb-10 text-3xl md:font--size-75 font-semibold">Case Studies</div>
				<div class="text-base md:font--size-20 line--height-160 text--gray">
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
					<div class="text-base md:font--size-17 text--gray" style="line-height: 1.8;opacity: .8">for world-class brands to make your products to live for world-class brands to make your products to live for <br> world-class brands to make your products to</div>
				</div>
			</a>
		</div>
	</section> -->

	@include('components.have-a-project-idea-section')
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush