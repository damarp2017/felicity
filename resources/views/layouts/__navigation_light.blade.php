<nav class="navbar hidden mmd:flex bg-white fixed px-12 py-3 z-20 w-full transition duration-300 ease-in-out items-center justify-between">
	<img src="{{ asset('images/logo/black.png') }}">
	<div class="flex items-center gap-x-8">
		<a href="#" class="hover:text-gray-500 text-xl"> Our Process </a>
		<a href="#" class="hover:text-gray-500 text-xl"> Opportunities </a>
		<a href="#" class="hover:text-gray-500 text-xl"> Case Studies </a>
		<a href="#" class="hover:text-gray-500 text-xl"> Insights </a>
		<a href="#" class="hover:text-gray-500 text-xl"> Contact Us </a>
	</div>
</nav>

<div x-data="{ open: false }">
	<nav :class="{ 'bg-white': open }" class="navbar-mobile block md:hidden fixed px-8 py-3 z-20 w-full ">
		<div class="flex items-center justify-between">
			<img class="h-10" src="{{ asset('images/logo/black.png') }}">
			<button @click="open = !open" class="menu focus:outline-none w-10 h-10 flex justify-center items-center bg-white rounded-full">
				<svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path x-show="!open" class="text--pink" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					<path x-show="open" class="text-gray-500" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				</svg>
			</button>
		</div>
		<div x-show="open"  class="mt-8 flex flex-col gap-y-5 transition duration-300 ease-in-out ">
			<a href="#" class="block text-black hover:text-gray-800 text-lg"> Our Process </a>
			<a href="#" class="block text-black hover:text-gray-800 text-lg"> Opportunities </a>
			<a href="#" class="block text-black hover:text-gray-800 text-lg"> Case Studies </a>
			<a href="#" class="block text-black hover:text-gray-800 text-lg"> Insights </a>
			<a href="#" class="block text-black hover:text-gray-800 text-lg"> Contact Us </a>
			<div class="flex justify-center items-center w-72 bg--gradient-black py-3 px-2 text-lg rounded-full text-white">
				Book A Free Consultation Call
			</div>
		</div>
	</nav>
</div>
