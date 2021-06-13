<nav class="hidden md:block navbar items-start fixed z-20 w-full transition duration-300 ease-in-out md:px-20 py-10">
	<div class="flex w-full justify-between">
		<a href="{{ url('/home') }}">
			<img class="logo-white " style="height:55px" src="{{ asset('images/logo/logo.png?new') }}">
			<!-- <img class="logo-black hidden " style="height:55px" src="{{ asset('images/logo/black.png?new') }}"> -->
		</a>
		<div class="flex items-center">
			
			@if (request()->is('insights') || request()->is('case-studies') || request()->is('our-clients'))
			<a href="{{ url('capabilities') }}" class="navlink mr--32 text-white  font--size-15"> Capabilities </a>
			<a href="{{ url('opportunities') }}" class="navlink mr--32 text-white  font--size-15"> Opportunities </a>
			<a href="//www.behance.net/felicityhq" target="_blank"class="navlink mr--32 text-white  font--size-15"> Case Studies </a>

			<!-- <a href="{{ url('insights') }}" class="navlink mr--32 text-white  font--size-15"> Insights </a> -->
			<a href="//medium.com/@felicitymedia" target="_blank" class="navlink mr--32 text-white  font--size-15"> Insights </a>
				<a href="{{ url('contact-us') }}" class="navlink mr--26 text-white  font--size-15"> Contact Us </a>
			@else
				<a href="{{ url('capabilities') }}" class="navlink mr--40 text-white  font--size-15"> Capabilities </a>
				<a href="{{ url('opportunities') }}" class="navlink mr--40 text-white  font--size-15"> Opportunities </a>
				<a href="//www.behance.net/felicityhq" target="_blank" class="navlink mr--40 text-white  font--size-15"> Case Studies </a>
				<!-- <a href="{{ url('insights') }}" class="navlink mr--40 text-white  font--size-15"> Insights </a> -->
				<a href="//medium.com/@felicitymedia" target="_blank" class="navlink mr--40 text-white  font--size-15"> Insights </a>
				<a href="{{ url('contact-us') }}" class="navlink mr--38 text-white  font--size-15"> Contact Us </a>

				<a href="//calendly.com/felicityhq/hello" target="_blank" class="bg-white py-4 px-8 rounded-full text--blue font--size-15 font-bold">
					Book A Free Consultation Call
				</a>
			@endif
		</div>
	</div>
</nav>

<div x-data="{ open: false }">
	<nav :class="{ 'bg--blue': open,'h-screen': open }" class="navbar-mobile block md:hidden fixed px-4 md:px-8 py-3 z-20 w-full ">
		<div class="flex items-center justify-between">
			<a href="{{ url('/home') }}">
				<img class="logo-white h-10" x-show="!open" src="{{ asset('images/logo/logo.png?new') }}">
				<!-- <img class="h-10" x-show="open" src="{{ asset('images/logo/black.png?new') }}"> -->
				<!-- <img class="logo-black-header hidden h-10" x-show="!open" src="{{ asset('images/logo/black.png?new') }}"> -->
			</a>
			<button @click="open = !open" class="menu focus:outline-none w-10 h-10 flex justify-center items-center bg-white rounded-full">
				<svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path x-show="!open" class="text--blue" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					<path x-show="open" class="text-gray-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		</div>
		<div x-show="open"  class="mt-8 flex flex-col gap-y-5 transition duration-300 ease-in-out pb-5" >
			<a href="{{ url('home') }}" class="block text-white hover:text-gray-800 text-lg"> Home </a>
			<a href="{{ url('capabilities') }}" class="block text-white hover:text-gray-800 text-lg"> Capabilities </a>
			<a href="{{ url('opportunities') }}" class="block text-white hover:text-gray-800 text-lg"> Opportunities </a>
			<a href="//www.behance.net/felicityhq" target="_blank" class="block text-white hover:text-gray-800 text-lg"> Case Studies </a>
			<a href="//medium.com/@felicitymedia" target="_blank" class="block text-white hover:text-gray-800 text-lg"> Insights </a>
			<a href="{{ url('contact-us') }}" class="block text-white hover:text-gray-800 text-lg"> Contact Us </a>
			<div class="flex justify-center items-center">
				<a href="//calendly.com/felicityhq/hello" target="_blank" class="flex justify-center items-center w-72 bg-white py-3 px-2 rounded-full text--blue font-bold">
				Book A Free Consultation Call
			</a>
			</div>
		</div>
	</nav>
</div>


<script>
	const navbar = document.querySelector('.navbar');
	const navlinks = document.querySelectorAll('.navlink');
	const logoBlack = document.querySelector('.logo-black')
	const logoBlackHeader = document.querySelector('.logo-black-header')
	const logoWhite = document.querySelector('.logo-white')
	const menu = document.querySelector('.menu')

	window.onscroll = () => {
		if (window.scrollY > 80) {
			// navbar.classList.add('hidden');
			navbar.classList.add('bg-tr');
			navbar.classList.add('py-1');
			navbar.classList.remove('py-10');
			logoWhite.style.transform='scale(.5)';
			// Array.from(logoWhite).forEach((logo, index) => {
			// 	logo.classList.add('hidden')
			// })
			// logoBlack.classList.remove('hidden')
			// logoBlackHeader.classList.remove('hidden')
			// menu.classList.add('border', 'border-red-500')
		}else{
			navbar.classList.remove('bg-tr');
			navbar.classList.remove('py-1');
			navbar.classList.add('py-10');
			logoWhite.style.transform='';

			// navbar.classList.remove('hidden');

			// Array.from(logoWhite).forEach((logo, index) => {
			// 	logo.classList.remove('hidden')
			// })
			// logoBlack.classList.add('hidden')
			// logoBlackHeader.classList.add('hidden')

			// menu.classList.remove('border', 'border-red-500')
		}
		// if (window.scrollY > window.innerHeight) {
		// 	// navbar.classList.add('bg-white');
		// 	// navbar.classList.add('shadow-lg');

		// 	Array.from(navlinks).forEach((navlink, index) => {
		// 		navlink.classList.remove('text-white', '');
		// 	});

		// 	Array.from(logoWhite).forEach((logo, index) => {
		// 		logo.classList.add('hidden')
		// 	})
		// 	logoBlack.classList.remove('hidden')
		// 	logoBlackHeader.classList.remove('hidden')
			
		// 	menu.classList.add('border', 'border-red-500')
		// } else {
		// 	// navbar.classList.remove('bg-white');
		// 	// navbar.classList.remove('shadow-lg');

		// 	Array.from(navlinks).forEach((navlink, index) => {
		// 		navlink.classList.add('text-white', '');
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
	<a href="{{ url('/home') }}">
		<img class="logo-white h-8" src="{{ asset('images/logo/logo.png?new') }}">
		<img class="logo-black hidden h-8" src="{{ asset('images/logo/black.png?new') }}">
	</a>
	<div class="flex gap-x-10 items-center">
		<a href="#" class="navlink text-white  font--size-15"> Our Process </a>
		<a href="{{ url('opportunities') }}" class="navlink text-white  font--size-15"> Opportunities </a>
		<a href="//www.behance.net/felicityhq" target="_blank" class="navlink text-white  font--size-15"> Case Studies </a>
		<a href="//medium.com/@felicitymedia" target="_blank" class="navlink text-white  font--size-15"> Insights </a>
		<a href="{{ url('contact-us') }}" class="navlink text-white  font--size-15"> Contact Us </a>
		<a href="//calendly.com/felicityhq/hello" target="_blank" class="bg--gradient-black py-3 px-8 rounded-full text-white font--size-15">
			Book A Free Consultation Call
		</a>
	</div>
</nav>

<div x-data="{ open: false }">
	<nav :class="{ 'bg-white': open }" class="navbar-mobile block md:hidden fixed px-8 py-3 z-20 w-full ">
		<div class="flex items-center justify-between">
			<a href="{{ url('/home') }}">
				<img class="logo-white h-10" x-show="!open" src="{{ asset('images/logo/logo.png?new') }}">
				<img class="h-10" x-show="open" src="{{ asset('images/logo/black.png?new') }}">
				<img class="logo-black-header hidden h-10" x-show="!open" src="{{ asset('images/logo/black.png?new') }}">
			</a>
			<button @click="open = !open" class="menu focus:outline-none w-10 h-10 flex justify-center items-center bg-white rounded-full">
				<svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path x-show="!open" class="text--blue" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					<path x-show="open" class="text-gray-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		</div>
		<div x-show="open"  class="mt-8 flex flex-col gap-y-5 transition duration-300 ease-in-out ">
			<a href="#" class="block text-black hover:text-gray-800 text-lg"> Our Process </a>
			<a href="{{ url('opportunities') }}" class="block text-black hover:text-gray-800 text-lg"> Opportunities </a>
			<a href="//www.behance.net/felicityhq" target="_blank" class="block text-black hover:text-gray-800 text-lg"> Case Studies </a>
			<a href="//medium.com/@felicitymedia" target="_blank" class="block text-black hover:text-gray-800 text-lg"> Insights </a>
			<a href="{{ url('contact-us') }}" class="block text-black hover:text-gray-800 text-lg"> Contact Us </a>
			<a href="//calendly.com/felicityhq/hello" target="_blank" class="flex justify-center items-center w-72 bg--gradient-black py-3 px-2 text-lg rounded-full text-white">
				Book A Free Consultation Call
			</a>
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
				navlink.classList.remove('text-white', '');
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
				navlink.classList.add('text-white', '');
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