	<section class="tag bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:app-container 2xl:px-40">
			<div class="flex ">
				<!-- <div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div> -->
				<h1 class="text--blue text-3xl md:font--size-39 font-bold">Our Values</h1>
			</div>
		</div>
		<div class="2xl:px-40">
			<div class="flex overflow-x-auto pt-5 slider" id="values-slider">
				{{-- @php
					$items = [
						[
							'no'=>'01',
							'title'=>'People over profits',
							'desc'=>"Business is valuable, however, what you'll value most working here is to meet people that truly want to help you succeed and evolve into a better version of yourself. This is as much about people as it's about the business. You're here to build people up, not pull them down. We build together, we win together."
						],
						[
							'no'=>'02',
							'title'=>'Think again, to gain',
							'desc'=>"Every step you take will have consequences. First order thinking is fast and easy. Second order thinking is more deliberate. Second order thinkers ask themselves the question “And then what?” before making a decision. Make deliberate decisions."
						],
						[
							'no'=>'03',
							'title'=>'Fight for great work',
							'desc'=>"Be excited about denying the delivery of work that doesn't make you feel proud while broadcasting it to the world. Things you work on for our partners, personal projects, etc, should be done to inspire people to do better. Don't ever settle for mediocrity - there's enough of that."
						],
						[
							'no'=>'04',
							'title'=>'Doing the right thing is always the right thing',
							'desc'=>"As marketing professionals, there will be times when you face the dilemma of selling things you don't believe in. We encourage you to say NO to anything that doesn't sit right with your conscience."
						],
						[
							'no'=>'05',
							'title'=>'Be accountable for your actions',
							'desc'=>"The great thing about accountability is that it helps you keep in check how things are moving and where it needs correction. Own your work! Accountability is non-negotiable."
						],
						[
							'no'=>'06',
							'title'=>"Respect people's time",
							'desc'=>"When things happen on time the overall productivity of the team and output increases. Audit and optimize. Don't leave people hanging."
						],
					]
				@endphp --}}
				@foreach($ourValues as $item)
				<div style="min-width: 100vw;">
					<div class="block md:flex mx-4 md:app-container">
						<div class="w-full md:w-1/2">
							<img class="max-h-80 max-w-full" src="{{ asset($item->image) }}">
						</div>
						<div class="w-full md:w-1/2">
							<div class="mb-3 text-black ">
								<div class="flex gap-x-4 items-center">
									<div class="text-2xl md:font--size-30">{{ $loop->iteration }}</div>
									<div class="w-48"><hr></div>
								</div>
								<h2 class=" text-3xl mt-3 md:mt--11 mb-6 md:mb--34 md:font--size-65 font-bold md:line--height-107c84">{{$item->title}}</h2>
							</div>
							<div class="text-base md:font--size-20 line--height-160 text--gray mb-4">{{$item->subtitle}}</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="mx-4 md:app-container 2xl:px-40">
			<div class="flex justify-between items-center">
				<div class="flex gap-x-2 items-center slider-dot">
					<div class="bg--blue w-10 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>
				</div>
				<div class="flex gap-x-4 items-center">
					<div class=" hover:zoom bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full slider-control" target="#values-slider" action="prev">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/prev.png') }}">
					</div>
					<div class=" hover:zoom bg-gray-200 w-10 h-10 md:w--64 md:h--64 flex items-center justify-center rounded-full slider-control" target="#values-slider" action="next">
						<img class="h-3 md:h-auto" src="{{ asset('images/utilities/next.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>