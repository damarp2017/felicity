<section class="w-full overflow-x-hidden pt-48 pb-10 bg--gradient-black">
	<div class="mx-4 md:mx-36">
		<div class="mb-10">
			<img class="mb-10 md:mb-20 h-10 md:h-auto" src="{{ asset('images/logo/logo.png') }}" alt="">
			<div class="text-white uppercase mb-4">Developed in india with ❤️</div>
			<div class="text-gray-50 mb-4 w-9/12">We are a UI/UX (user interface / user experience) design & development company. We have helped multiple clients from small medium businesses to big brands from various industry to create their website / mobile apps user experiences .</div>
			<div class="text-white mb-3">We are part of the conscious advertising network</div>
			<div class="text-white">We are mentored by Schbang</div>
		</div>

		<div class="grid grid-cols-2 md:grid-cols-3 gap-x-5 md:gap-x-28 mb-6 md:mb-20 ">
			<div class="flex flex-col mb-8 md:mb-0">
				<div class="text-gray-50 mb-2 uppercase">quick links</div>
				<a href="#" class="text-white mb-2">Home</a>
				<a href="#" class="text-white mb-2">Career</a>
				<a href="#" class="text-white mb-2">Contact Us</a>
			</div>
			<div class="flex flex-col mb-8 md:mb-0">
				<div class="text-gray-50 mb-2 uppercase">Social Media</div>
				<a href="#" class="text-white mb-2">Instagram</a>
				<a href="#" class="text-white mb-2">Facebook</a>
				<a href="#" class="text-white mb-2">Twitter</a>
			</div>
			<div class="flex flex-col mb-8 md:mb-0">
				<div class="text-gray-50 mb-2 uppercase">About</div>
				<a href="#" class="text-white mb-2">Terms</a>
				<a href="#" class="text-white mb-2">Privacy</a>
			</div>
		</div>


		{{-- dekstop --}}
		<div class="hidden md:flex justify-between items-center">
			<div class="flex items-center gap-x-8">
				<div class="text-white">© {{ date('Y') }} Felicity Media Private Limited</div>
				<div class="text-white">hello@felicitymedia.in</div>
				<div class="text-white">+91-7738180136</div>
			</div>
			<div class="flex items-center gap-x-8">
				<a href="">
					<img src="{{ asset('images/utilities/sosmed/twitter.png') }}" alt="">
				</a>
				<a href="">
					<img src="{{ asset('images/utilities/sosmed/ig.png') }}" alt="">
				</a>
				<a href="">
					<img src="{{ asset('images/utilities/sosmed/fb.png') }}" alt="">
				</a>
			</div>
		</div>

		{{-- mobile --}}
		<div class="flex flex-col md:hidden gap-x-8 gap-y-4">
			<div class="text-white">© {{ date('Y') }} Felicity Media Private Limited</div>
			<div class="text-white">hello@felicitymedia.in</div>
			<div class="flex justify-between">
				<div class="text-white">+91-7738180136</div>
				<div class="flex items-center gap-x-8">
					<a href="">
						<img src="{{ asset('images/utilities/sosmed/twitter.png') }}" alt="">
					</a>
					<a href="">
						<img src="{{ asset('images/utilities/sosmed/ig.png') }}" alt="">
					</a>
					<a href="">
						<img src="{{ asset('images/utilities/sosmed/fb.png') }}" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	
</section>
