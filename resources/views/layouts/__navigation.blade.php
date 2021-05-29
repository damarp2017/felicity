<nav class="navbar hidden md:flex items-center justify-between fixed px-8 py-2 z-20 w-full transition duration-300 ease-in-out ">
	<a href="{{ url('/') }}">
		<img class="h-8" src="{{ asset('images/logo/logo.png') }}">
	</a>
	<div class="flex gap-x-10 items-center">
		<a href="#" class="text-white hover:text-gray-200 text-lg"> Our Process </a>
		<a href="{{ url('opportunities') }}" class="text-white hover:text-gray-200 text-lg"> Opportunities </a>
		<a href="{{ url('case-studies') }}" class="text-white hover:text-gray-200 text-lg"> Case Studies </a>
		<a href="{{ url('insights') }}" class="text-white hover:text-gray-200 text-lg"> Insights </a>
		<a href="{{ url('contact-us') }}" class="text-white hover:text-gray-200 text-lg"> Contact Us </a>
		<div class="bg--gradient-black py-3 px-8 text-lg rounded-full text-white">
			Book A Free Consultation Call
		</div>
	</div>
</nav>

<div x-data="{ open: false }">
	<nav :class="{ 'bg-white': open }" class="navbar-mobile block md:hidden fixed px-8 py-3 z-20 w-full ">
		<div class="flex items-center justify-between">
			<a href="{{ url('/') }}">
				<img class="logo-white h-10" x-show="!open" src="{{ asset('images/logo/logo.png') }}">
				<img class="logo-black h-10" x-show="open" src="{{ asset('images/logo/black.png') }}">
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
	const logoBlack = document.querySelector('.logo-black')
	const logoWhite = document.querySelector('.logo-white')
	const menu = document.querySelector('.menu')

	window.onscroll = () => {
		if (window.scrollY > 300) {
			navbar.classList.add('bg--header-gradient');
			logoBlack.style.display = ''
			logoWhite.style.display = 'none'
			menu.classList.add('border', 'border-red-500')
		} else {
			navbar.classList.remove('bg--header-gradient');
			logoBlack.style.display = 'none'
			logoWhite.style.display = ''
			menu.classList.remove('border', 'border-red-500')
		}
	};

	//const navbar = document.querySelector('.navbar');
	// const navbarMobile = document.querySelector('.navbar-mobile');

	// window.onscroll = () => {
	// 	if (window.scrollY > 300) {
	// 		navbar.classList.add('bg--header-gradient');

	// 		navbarMobile.classList.add('bg-white');
	// 	} else {
	// 		navbar.classList.remove('bg--header-gradient');
	// 		navbarMobile.classList.remove('bg-white');
	// 	}
	// };

	
</script>