@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--blue relative ">
		@include('layouts.__navigation')
		<!-- <img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full"> -->
		<div class="flex flex-col h-full justify-center items-center" style="padding: 20% 0">
			<div class="mx-4 md:mx-0 text-center">
				<div class="text-white font-semibold md:line--height-105c8 text-5xl md:font--size-95 mb-5 text-center"> Reach Your Audience Unmistakably </div>
			</div>
			<!-- <div class="block text-center md:hidden text-lg md:text-lg text-white mb-3 uppercase md:normal-case">that next <span class="font-normal md:font-semibold not-italic md:italic">generation</span> will witness</div> -->
			<!-- <div class="text-base md:font--size-22 text-center w-9/12 md:w-5/12 text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div> -->
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden py-10 md:pb-20 md:pt--157">
		<div class="mx-4 md:app-container">
			<div class="block md:flex mb-10 flex-col">
				<div class="mb-6 md:mb-10 text-3xl md:font--size-55 font-semibold">About The Service</div>
				<div class="text-base md:font--size-22 line--height-160 text--grey-transparent">You had an idea that you brought to life after putting hours and hours of effort into honing the product that truly benefits the customer and solves a problem. Now, It’s time for you to share it with the world and you need a partner that can help you do that. At Felicity, we understand the power of ideas but, we also understand that to succeed, efforts need a powerful push in the right direction. We help businesses with holistic marketing strategies to capitalize and win in this competitive marketplace. We know that when it comes to marketing, there is no one-size-fits-all.</div>
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
			@php
				$items = [
					[
						'no'=>'01',
						'title'=>'Set Expectations and Goals',
						'desc'=>"We set realistic and measurable goals to achieve over the next 18 to 24 months. This time span allows us to plan activities around community events that are in line with your marketing goals."
					],
					[
						'no'=>'02',
						'title'=>'Conduct a Brand Audit',
						'desc'=>"We review all marketing activities that have been carried out by your brand over the past three years. We are as thorough as possible and make sure to review every announcement, advertisement, phonebook ad, open house, brochure and seminar and evaluate what worked for your brand."
					],
					[
						'no'=>'03',
						'title'=>'Conduct Market Research',
						'desc'=>"We draw a realistic picture of your brand. With this research, we can make fairly accurate projections about future growth in the market, identify competitive factors and explore nontraditional opportunities. Our research may even bring to light some problem areas in your brand positioning as well as solutions you can implement right away."
					],
					[
						'no'=>'04',
						'title'=>'Identify Target Audience',
						'desc'=>"With the help of our market research analysis, we will be able to identify our Target Audience which is the specific group of customers to whom we should direct our marketing efforts. We understand that the key to marketing lies in targeting the audience that your brand can serve better than your competition – and communicating this to that target group."
					],
					[
						'no'=>'05',
						'title'=>'Determine a Media Plan',
						'desc'=>"Depending on the scope of work we narrow down on after our initial analysis of the brand, we will chart out a media plan that fits our brand’s requirements and define an actionable conversion plan along with it."
					],
					[
						'no'=>'06',
						'title'=>"Develop Marketing Strategies",
						'desc'=>"With your budget in place, we will begin to define specific marketing strategies that will address your goals, reach your target audience and build your customer base. Each strategy will be related to a specific goal and will be made up of defined execution plans."
					],
					[
						'no'=>'07',
						'title'=>"Develop an Action Plan",
						'desc'=>"An action plan is a time-line that will show which marketing actions will be done when and by whom. The schedule will also include the cost of each marketing action and how it fits into the budget estimates for our campaign period."
					],
					[
						'no'=>'08',
						'title'=>"Define Success Parameters",
						'desc'=>"The value of a marketing plan is its effectiveness, which requires deliberate and timely implementation and monitoring and evaluation of results. It’s important to measure our results against the standards we set in establishing our goals. We will review our plan periodically (we recommend quarterly) by comparing our progress with the action plan."
					],
				]
			@endphp
		<div class="flex overflow-x-auto pt-5" >
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
			'slug'=>'brand-audit',
			'title'=>'Brand Audit',
			'desc'=>"Overview of where we stand in the current landscape. "
			],
			[
			'slug'=>'market-research',
			'title'=>'Market Research',
			'desc'=>"Insights and ideas for communication effectiveness. "
			],
			[
			'slug'=>'media-plan',
			'title'=>'Media Plan',
			'desc'=>"Defining who, what, and where of our campaign communication. "
			],
			[
			'slug'=>'creative-output',
			'title'=>'Creative Output',
			'desc'=>"Clutter breaking content to help you stand apart in the market. "
			],
			[
			'slug'=>'action-plan',
			'title'=>'Action Plan',
			'desc'=>"Defining the pace and substance of our campaign. "
			],
			[
			'slug'=>'impact-reports',
			'title'=>'Impact Reports',
			'desc'=>"Measuring success and business impact. "
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