<nav class="navbar hidden md:flex shadow-lg bg-white padding-navbar-light z-20 w-full 
transition duration-300 ease-in-out items-start justify-between">
	<a href="{{ url('/home') }}">
		<img class="h-8" style="height:55px" src="{{ asset('images/logo/black.png?new') }}">
	</a>
	<div class="flex items-center gap-x-8">
		<a href="{{ url('capabilities') }}" class="hover:text-gray-500 font--size-15"> Capabilities </a>
		<a href="{{ url('opportunities') }}" class="hover:text-gray-500 font--size-15"> Opportunities </a>
		<a href="//www.behance.net/felicityhq" target="_blank" class="hover:text-gray-500 font--size-15"> Case Studies </a>
		<a href="//medium.com/@felicitymedia" target="_blank" class="hover:text-gray-500 font--size-15"> Insights </a>
		<a href="{{ url('contact-us') }}" class="hover:text-gray-500 font--size-15"> Contact Us </a>
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

