@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative height--90vh">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center">
			<div class="text-white font-semibold text-3xl md:font--size-95 mb-5 text-center" style="line-height: 105.8%"> What's your next <br> destination?</div>
			<div class="text-base text-center md:font--size-22 text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		</div>
	</header>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:mx-36">
			<div class="flex items-center justify-center mb-20">
				<div class="mr-4"><img class="w-8 md:w-10 h-1" src="{{ asset('images/utilities/hr.png') }}"></div>
				<div class="text--pink text-3xl md:font--size-39 font-bold">Vision</div>
			</div>
	
			<div class="block md:flex mb-24">
				<div class="w-full md:w-1/2">
					<img class="h-auto md:h-96" src="{{ asset('images/opportunities/2.png') }}">
				</div>
				<div class="w-full md:w-1/2">
					<div class="mb-3 text-black ">
						<div class="flex gap-x-4 items-center">
							<div class="text-2xl md:font--size-30">01</div>
							<div class="w-48"><hr></div>
						</div>
						<div class=" text-3xl mt-3 md:mt-5 mb-6 md:mb-10 md:font--size-100 font-bold md:line--height-88c84">Champion the mission</div>
					</div>
					<div class="text-base md:font--size-22 text--grey-transparent mb-4">The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.The sketching of wireframes is integral in beginning to realise concepts and ideas into readable, managed design.</div>
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

	<section class="bg--gray-light w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:mx-36">
			<div class="flex flex-col items-center justify-center text-center mb-20">
				<div class="text-3xl md:font--size-55 font-bold mb-3 md:mb-10 md:line--height-99c34">Live your best life , <span class="text--pink">Benifits</span> to <br> work with us .</div>
				<div class="text-base md:font--size-18 text-gray-400">for world-class brands to make your products to live for world-class brands to make <br> your products to live for world-class brands to make your products to</div>
			</div>
	
			<div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-5">
				<div class="bg-white rounded-xl p-3 md:p-4 shadow-lg">
					<div class="flex items-center justify-center">
						<img class="mb-9 h-14" src="{{ asset('images/opportunities/items/calendar.png') }}" alt="">
					</div>
					<div class="text--pink text-base md:font--size-30 md:line--height-124c34 text-center">
						<div class="font-semibold">Flexible</div>
						<div>Time Schedule</div>
					</div>	
				</div>

				<div class="bg-white rounded-xl p-3 md:p-4 shadow-lg">
					<div class="flex items-center justify-center">
						<img class="mb-9 h-14" src="{{ asset('images/opportunities/items/learing.png') }}" alt="">
					</div>
					<div class="text--pink text-base md:font--size-30 md:line--height-124c34 text-center">
						<div class="font-semibold">Learing and </div>
						<div>Development</div>
					</div>
				</div>

				<div class="bg-white rounded-xl p-3 md:p-4 shadow-lg">
					<div class="flex items-center justify-center">
						<img class="mb-9 h-14" src="{{ asset('images/opportunities/items/love.png') }}" alt="">
					</div>
					<div class="text--pink text-base md:font--size-30 md:line--height-124c34 text-center">
						<div class="font-semibold">Generous Parental  </div>
						<div><span class="font-semibold">and</span> Family Leaves</div>
					</div>
				</div>

				<div class="bg-white rounded-xl p-3 md:p-4 shadow-lg">
					<div class="flex items-center justify-center">
						<img class="mb-9 h-14" src="{{ asset('images/opportunities/items/headspace.png') }}" alt="">
					</div>
					<div class="text--pink text-base md:font--size-30 md:line--height-124c34 text-center">
						<div class="font-semibold">Headspace</div>
						<div>Membership</div>
					</div>
				</div>
				<div class="bg-white rounded-xl p-3 md:p-4 shadow-lg">
					<div class="flex items-center justify-center">
						<img class="mb-9 h-14" src="{{ asset('images/opportunities/items/book.png') }}" alt="">
					</div>
					<div class="text--pink text-base md:font--size-30 md:line--height-124c34 text-center">
						<div class="font-semibold">Book</div>
						<div>Reimbursements</div>
					</div>
				</div>

				<div class="bg-white rounded-xl p-3 md:p-4 shadow-lg">
					<div class="flex items-center justify-center">
						<img class="mb-9 h-14" src="{{ asset('images/opportunities/items/time.png') }}" alt="">
					</div>
					<div class="text--pink text-base md:font--size-30 md:line--height-124c34 text-center">
						<div class="font-semibold">Paid Volunteer </div>
						<div>Time</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:mx-36">
			<div class="block md:flex items-center justify-between mb-20">
				<div class="w-full md:w-1/2">
					<img class="w-3/4" src="{{ asset('images/opportunities/1.png') }}" alt="">
				</div>
				<div class="w-full md:w-1/2">
					<div class="mb-7 font-semibold text-2xl md:font--size-38">Create a world where anyone <br> can belong anywhere</div>
					<div class="text-gray-400 text-base md:font--size-22 w-full md:w-3/4">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful experience. We love to contribute to the community, from our work on testing React components to our new Android framework.  Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful experience.</div>
				</div>
			</div>	

			<div class="block md:flex items-center justify-between mb-20">
				<div class="block md:hidden w-full md:w-1/2">
					<img class="w-3/4" src="{{ asset('images/opportunities/3.png') }}" alt="">
				</div>
				<div class="w-full md:w-1/2">
					<div class="mb-7 font-semibold text-2xl md:font--size-38">Create a world where anyone <br> can belong anywhere</div>
					<div class="text-gray-400 text-base md:font--size-22 w-full md:w-3/4">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful experience. We love to contribute to the community, from our work on testing React components to our new Android framework.  Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful experience.</div>
				</div>
				<div class="hidden md:block w-full md:w-1/2">
					<img class="w-3/4" src="{{ asset('images/opportunities/3.png') }}" alt="">
				</div>
			</div>	
		</div>
	</section>

	<section class="bg--section w-full overflow-x-hidden py-10 md:py-20">
		<div class="mx-4 md:mx-36">
			<div class="mb-0 md:mb-5">
				<div class="text-3xl md:font--size-55 mb-6 md:mb-10 font-bold md:line--height-99c34">Oppurtunities , Small teams, <br> <span class="text--pink">global mission</span> </div>
				<div class=" text-base md:font--size-22 text-gray-400">for world-class brands to make your products to live for world-class brands to make your products to <br> live for world-class brands to make your products to</div>
			</div>

			<div class="relative mr-6 my-10 md:my-2 w-full">
				<input type="text" class="bg-white w-full md:font--size-16 focus:outline-none rounded-xl border-0 p-3" placeholder="Search Any Position . . .">
				<div class="absolute top-0 right-0 transform translate-y-1/2 pin-r pin-t mt-3 mr-4 text-purple-lighter">
					<svg version="1.1" class="h-4 text-dark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 52.966 52.966" style="enable-background:new 0 0 52.966 52.966;" xml:space="preserve"> <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21 c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279 C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19 S32.459,40,21.983,40z"/></svg>
				</div>
			</div>

			<div>
				<div class="uppercase my-4 text-sm md:font--size-14">Filters</div>
				<div class="grid grid-flow-col auto-cols-max gap-x-5 mb-10 overflow-x-auto md:overflow-x-hidden ">
					<a href="#" class="filter-link rounded-lg py-3 px-5 md:font--size-17 focus:bg--pink focus:text-white">UI/UX Designer</a>
					
					<a href="#" class="filter-link rounded-lg py-3 px-5 md:font--size-17 focus:bg--pink focus:text-white">Web Designer</a>
					<a href="#" class="filter-link rounded-lg py-3 px-5 md:font--size-17 focus:bg--pink focus:text-white">Graphic Designer</a>
					<a href="#" class="filter-link rounded-lg py-3 px-5 md:font--size-17 focus:bg--pink focus:text-white">Content writer</a>
				</div>

				<div class="uppercase mb-6 text-sm md:font--size-14">AVAILABLE POSITIONS</div>
				<div class="grid grid-cols-1 md:grid-cols-3 mb-10 flex-wrap gap-6 md:gap-10">
					@for ($i = 0; $i < 6; $i++)
					<div class="bg-white p-6 shadow-lg">
						<div class="font-semibold mb-2 text-lg md:font--size-24">Senior UI/UX Designer</div>
						<div class="text-gray-400 mb-6 md:font--size-17">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
						<a href="" class="flex justify-end">
							<img class="h-4" src="{{ asset('images/utilities/next.png') }}" alt="">
						</a>
					</div>
					@endfor
				</div>

				<div class="flex justify-center">
					<button class="bg--gradient-black rounded-full py-3 px-16 text-white md:font--size-20">Show More</button>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('scripts')
	<script>
		const links = document.querySelectorAll('.filter-link')
		Array.from(links).forEach(link => {
			link.addEventListener('click', function (e) {
				e.preventDefault()
			})
		})
		
	</script>
@endpush