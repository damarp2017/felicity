<nav class="navbar items-center fixed px-20 py-10 z-20 w-full transition duration-300 ease-in-out ">
	<div class=" hidden md:flex w-full justify-between py-4">
		<a href="{{ url('/') }}">
			<img class="logo-white " style="height:55px" src="{{ asset('images/logo/logo.png') }}">
			<img class="logo-black hidden " style="height:55px" src="{{ asset('images/logo/black.png') }}">
		</a>
		<div class="flex gap-x-10 items-center">
			<a href="{{ url('capabilities') }}" class="navlink text-white hover:text-gray-200 font--size-15"> Capabilities </a>
			<a href="{{ url('opportunities') }}" class="navlink text-white hover:text-gray-200 font--size-15"> Opportunities </a>
			<a href="{{ url('case-studies') }}" class="navlink text-white hover:text-gray-200 font--size-15"> Case Studies </a>
			<a href="{{ url('insights') }}" class="navlink text-white hover:text-gray-200 font--size-15"> Insights </a>
			<a href="{{ url('contact-us') }}" class="navlink text-white hover:text-gray-200 font--size-15"> Contact Us </a>
			@if (request()->is('insights') || request()->is('case-studies'))
				
			@else
				<div class="bg--gradient-black py-4 px-8 rounded-full text-white font--size-15">
					Book A Free Consultation Call
				</div>
			@endif
		</div>
	</div>
</nav>

<div x-data="{ open: false }">
	<nav :class="{ 'bg-white': open }" class="navbar-mobile block md:hidden fixed px-8 py-3 z-20 w-full ">
		<div class="flex items-center justify-between">
			<a href="{{ url('/') }}">
				<img class="logo-white h-10" x-show="!open" src="{{ asset('images/logo/logo.png') }}">
				<img class="h-10" x-show="open" src="{{ asset('images/logo/black.png') }}">
				<img class="logo-black-header hidden h-10" x-show="!open" src="{{ asset('images/logo/black.png') }}">
			</a>
			<button @click="open = !open" class="menu focus:outline-none w-10 h-10 flex justify-center items-center bg-white rounded-full">
				<svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path x-show="!open" class="text--pink" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					<path x-show="open" class="text-gray-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		</div>
		<div x-show="open"  class="mt-8 flex flex-col gap-y-5 transition duration-300 ease-in-out " >
			<a href="{{ url('capabilities') }}" class="block text-black hover:text-gray-800 text-lg"> Capabilities </a>
			<a href="{{ url('opportunities') }}" class="block text-black hover:text-gray-800 text-lg"> Opportunities </a>
			<a href="{{ url('case-studies') }}" class="block text-black hover:text-gray-800 text-lg"> Case Studies </a>
			<a href="{{ url('insights') }}" class="block text-black hover:text-gray-800 text-lg"> Insights </a>
			<a href="{{ url('contact-us') }}" class="block text-black hover:text-gray-800 text-lg"> Contact Us </a>
			<div class="flex justify-center items-center w-72 bg--gradient-black py-3 px-2 text-lg rounded-full text-white">
				Book A Free Consultation Call
			</div>
		</div>
	</nav>
</div>


<script>
	const navbar = document.querySelector('.navbar');
	const navlinks = document.querySelectorAll('.navlink');
	const logoBlack = document.querySelector('.logo-black')
	const logoBlackHeader = document.querySelector('.logo-black-header')
	const logoWhite = document.querySelectorAll('.logo-white')
	const menu = document.querySelector('.menu')

	window.onscroll = () => {
		if (window.scrollY > 80) {
			navbar.classList.add('hidden');

			Array.from(logoWhite).forEach((logo, index) => {
				logo.classList.add('hidden')
			})
			logoBlack.classList.remove('hidden')
			logoBlackHeader.classList.remove('hidden')
			menu.classList.add('border', 'border-red-500')
		}else{
			navbar.classList.remove('hidden');

			Array.from(logoWhite).forEach((logo, index) => {
				logo.classList.remove('hidden')
			})
			logoBlack.classList.add('hidden')
			logoBlackHeader.classList.add('hidden')

			menu.classList.remove('border', 'border-red-500')
		}
		// if (window.scrollY > 300) {
		// 	navbar.classList.add('bg-white');
		// 	navbar.classList.add('shadow-lg');

		// 	Array.from(navlinks).forEach((navlink, index) => {
		// 		navlink.classList.remove('text-white', 'hover:text-gray-200');
		// 	});

		// 	Array.from(logoWhite).forEach((logo, index) => {
		// 		logo.classList.add('hidden')
		// 	})
		// 	logoBlack.classList.remove('hidden')
		// 	logoBlackHeader.classList.remove('hidden')
			
		// 	menu.classList.add('border', 'border-red-500')
		// } else {
		// 	navbar.classList.remove('bg-white');
		// 	navbar.classList.remove('shadow-lg');

		// 	Array.from(navlinks).forEach((navlink, index) => {
		// 		navlink.classList.add('text-white', 'hover:text-gray-200');
		// 	});

		// 	Array.from(logoWhite).forEach((logo, index) => {
		// 		logo.classList.remove('hidden')
		// 	})
		// 	logoBlack.classList.add('hidden')
		// 	logoBlackHeader.classList.add('hidden')

		// 	menu.classList.remove('border', 'border-red-500')
		// }
	};
</script>


{{-- <nav class="navbar hidden md:flex items-center justify-between fixed px-8 py-3 z-20 w-full transition duration-300 ease-in-out ">
	<a href="{{ url('/') }}">
		<img class="logo-white h-8" src="{{ asset('images/logo/logo.png') }}">
		<img class="logo-black hidden h-8" src="{{ asset('images/logo/black.png') }}">
	</a>
	<div class="flex gap-x-10 items-center">
		<a href="#" class="navlink text-white hover:text-gray-200 font--size-15"> Our Process </a>
		<a href="{{ url('opportunities') }}" class="navlink text-white hover:text-gray-200 font--size-15"> Opportunities </a>
		<a href="{{ url('case-studies') }}" class="navlink text-white hover:text-gray-200 font--size-15"> Case Studies </a>
		<a href="{{ url('insights') }}" class="navlink text-white hover:text-gray-200 font--size-15"> Insights </a>
		<a href="{{ url('contact-us') }}" class="navlink text-white hover:text-gray-200 font--size-15"> Contact Us </a>
		<div class="bg--gradient-black py-3 px-8 rounded-full text-white font--size-15">
			Book A Free Consultation Call
		</div>
	</div>
</nav>

<div x-data="{ open: false }">
	<nav :class="{ 'bg-white': open }" class="navbar-mobile block md:hidden fixed px-8 py-3 z-20 w-full ">
		<div class="flex items-center justify-between">
			<a href="{{ url('/') }}">
				<img class="logo-white h-10" x-show="!open" src="{{ asset('images/logo/logo.png') }}">
				<img class="h-10" x-show="open" src="{{ asset('images/logo/black.png') }}">
				<img class="logo-black-header hidden h-10" x-show="!open" src="{{ asset('images/logo/black.png') }}">
			</a>
			<button @click="open = !open" class="menu focus:outline-none w-10 h-10 flex justify-center items-center bg-white rounded-full">
				<svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path x-show="!open" class="text--pink" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					<path x-show="open" class="text-gray-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		</div>
		<div x-show="open"  class="mt-8 flex flex-col gap-y-5 transition duration-300 ease-in-out ">
			<a href="#" class="block text-black hover:text-gray-800 text-lg"> Our Process </a>
			<a href="{{ url('opportunities') }}" class="block text-black hover:text-gray-800 text-lg"> Opportunities </a>
			<a href="{{ url('case-studies') }}" class="block text-black hover:text-gray-800 text-lg"> Case Studies </a>
			<a href="{{ url('insights') }}" class="block text-black hover:text-gray-800 text-lg"> Insights </a>
			<a href="{{ url('contact-us') }}" class="block text-black hover:text-gray-800 text-lg"> Contact Us </a>
			<div class="flex justify-center items-center w-72 bg--gradient-black py-3 px-2 text-lg rounded-full text-white">
				Book A Free Consultation Call
			</div>
		</div>
	</nav>
</div>


<script>
	const navbar = document.querySelector('.navbar');
	const navlinks = document.querySelectorAll('.navlink');
	const logoBlack = document.querySelector('.logo-black')
	const logoBlackHeader = document.querySelector('.logo-black-header')
	const logoWhite = document.querySelectorAll('.logo-white')
	const menu = document.querySelector('.menu')
	window.onscroll = () => {
		if (window.scrollY > 300) {
			navbar.classList.add('bg-white');
			navbar.classList.add('shadow-lg');
			Array.from(navlinks).forEach((navlink, index) => {
				navlink.classList.remove('text-white', 'hover:text-gray-200');
			});
			Array.from(logoWhite).forEach((logo, index) => {
				logo.classList.add('hidden')
			})
			logoBlack.classList.remove('hidden')
			logoBlackHeader.classList.remove('hidden')
			
			menu.classList.add('border', 'border-red-500')
		} else {
			navbar.classList.remove('bg-white');
			navbar.classList.remove('shadow-lg');
			Array.from(navlinks).forEach((navlink, index) => {
				navlink.classList.add('text-white', 'hover:text-gray-200');
			});
			Array.from(logoWhite).forEach((logo, index) => {
				logo.classList.remove('hidden')
			})
			logoBlack.classList.add('hidden')
			logoBlackHeader.classList.add('hidden')
			menu.classList.remove('border', 'border-red-500')
		}
	};
</script> --}}