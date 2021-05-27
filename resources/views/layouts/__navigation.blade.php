<nav class="navbar fixed px-8 py-3 z-20 w-full transition duration-300 ease-in-out flex items-center justify-between">
	<img src="{{ asset('images/logo/logo.png') }}">
	<div class="flex gap-x-10 items-center">
		<a href="#" class="text-white hover:text-gray-200 text-2xl"> Our Process </a>
		<a href="#" class="text-white hover:text-gray-200 text-2xl"> Opportunities </a>
		<a href="#" class="text-white hover:text-gray-200 text-2xl"> Case Studies </a>
		<a href="#" class="text-white hover:text-gray-200 text-2xl"> Insights </a>
		<a href="#" class="text-white hover:text-gray-200 text-2xl"> Contact Us </a>
		<div class="bg--gradient-black py-5 px-8 text-2xl rounded-full text-white">
			Book A Free Consultation Call
		</div>
	</div>
</nav>

<script>
	const navbar = document.querySelector('.navbar');
	window.onscroll = () => {
		if (window.scrollY > 300) {
			navbar.classList.add('bg--header-gradient');
		} else {
			navbar.classList.remove('bg--header-gradient');
		}
	};
</script>