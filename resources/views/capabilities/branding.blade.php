@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative ">
		@include('layouts.__navigation')
		<div class="mx-4 md:app-container">
		<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-screen"> -->
			<div class="flex flex-col h-screen justify-center items-center" logo/black.png?new>
				<div class="mx-4 md:mx-0 text-center">
					<h1 class="text-white font-semibold md:line--height-105c8 text-5xl md:font--size-95 mb-5 text-center">Smart Branding, Exceptional Design</h1>
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
				<div class="text-base md:font--size-20 line--height-160 text--grey-transparent">A logo, a name, or a colour scheme aren't enough to define your brand. It is, at the most basic level, who you are as a brand. Customers' perceptions of your company are shaped by your branding, which may elicit an emotional response at every touch point if done correctly. Businesses with strong brands are more likely to retain long-term customers and have an easier time attracting new customers since they already know what they stand for.</div>
			</div>
		</div>
	</section>

	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container ">
			<div class="flex  mb-20">
				<!-- <div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
				<h2 class="text--blue text-3xl md:font--size-39 font-bold">Our Process</h2>
			</div>
			<div class="flex">
				<div class="w-1/3">
					<div >
						<img class="max-h-80 max-w-full" src="{{ asset('images/capabilities/branding.png') }}">
					</div>
				</div>
				<div class="w-2/3">
					<div class="flex overflow-x-auto pt-5 slider space-area" id="process-slider">
						@php
							$items = [
								[
									'no'=>'01',
									'title'=>' Internal Review',
									'desc'=>"We begin by convening the management team for a discovery meeting. Take notes on your team's objectives, market tactics, and individual viewpoints."
								],
								[
									'no'=>'02',
									'title'=>'Identify Target Audience',
									'desc'=>"The next step is to identify all of your target audiences. If non-customer audiences are vital to your business's success, we take them into consideration. Partners, influencers, referral sources, and potential hires are examples of this audience segment."
								],
								[
									'no'=>'03',
									'title'=>'Identify The Differentiators',
									'desc'=>"We then start looking for differentiators or traits that set your company apart from similar competitors. Three conditions we pay attention to: It has to be correct. It has to be relevant to your audience. It has to be demonstrable."
								],
								[
									'no'=>'04',
									'title'=>'Contextualize Messaging',
									'desc'=>"We then move on to the next logical step and apply your differentiators and positioning to each of your audiences at this point to contextualize communication for different mediums."
								],
								[
									'no'=>'05',
									'title'=>'Designing The Guidelines',
									'desc'=>"The final step is defining the Brand Guidelines that outline how the brand is put together and mention what is and isn't permitted. These standards can be extensive, specifying how the brand should be applied in every circumstance, or they can be kept basic, allowing for variation and exploration."
								],
							]
						@endphp
						@foreach($items as $item)
						<div style="min-width: 50vw;" class="space-item-1 px-10">
							<div class="mb-3 text-black ">
								<div class="flex gap-x-4 items-center">
									<div class="text-2xl md:font--size-30">{{$item['no']}}</div>
									<div class="w-48"><hr></div>
								</div>
								<div class=" text-3xl mt-3 md:mt--11 mb-6 md:mb--34 md:font--size-65 font-bold md:line--height-107c84">{{$item['title']}}</div>
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
				<div class="flex gap-x-4 items-center slider-dot">
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

	<section class="bg-white w-full overflow-x-hidden py-10 md:pb-20 md:pt--171">
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 flex-col">
				<h2 class="mb-6 md:mb-10 text-3xl md:font--size-75 font-semibold">What’s all Included</h2>
				<!-- <div class="text-base md:font--size-20 line--height-160 text--gray">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div> -->
			</div>
		</div>

		@php
		$items = [
			[
			'slug'=>'logo-design',
			'title'=>'Logo Design',
			'desc'=>"First impressions matter in a highly cluttered marketplace. "
			],
			[
			'slug'=>'brand-messaging',
			'title'=>'Brand Messaging ',
			'desc'=>"Brand messaging should have a purpose and consistency across channels."
			],
			[
			'slug'=>'brand-positioning',
			'title'=>'Brand Positioning ',
			'desc'=>"The way you differentiate yourself from the competition is through brand positioning. "
			],
			[
			'slug'=>'brand-voice',
			'title'=>'Brand Voice ',
			'desc'=>"Brands, like people, have their own distinct ways of expressing themselves."
			],
			[
			'slug'=>'style-guides',
			'title'=>'Style Guides ',
			'desc'=>"Codify your branding guidelines for your stakeholders"
			],
			[
			'slug'=>'contextualize-branding',
			'title'=>'Contextualize Branding ',
			'desc'=>"Define a coherent voice for different social channels"
			],
		];
		@endphp
		<div class="relative mx-10">
			<div class="mx-0 md:mx-10 space-area ">
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
					<div class="text-base md:font--size-17 text--grey-transparent" style="line-height: 1.8;opacity: .8">for world-class brands to make your products to live for world-class brands to make your products to live for <br> world-class brands to make your products to</div>
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