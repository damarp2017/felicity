<section class="w-full overflow-x-hidden {{ request()->is('/') ? 'pt-48' : 'pt-20' }}  pb-36 bg--gradient-black">
	<div class="mx-4 md:app-container">
		<div class="mb-10">
			<img class="mb-10 md:mb-20 h-10 md:h-auto" src="{{ asset('images/logo/logo.png') }}" alt="">
			<div class="text-white uppercase font--poppins mb-4 md:font--size-15">Developed in india with ❤️</div>
			<div class="text-gray-50 font--poppins mb-4 md:mb-7 md:font--size-18" style="color: #8C8C8C;">We are a UI/UX (user interface / user experience) design & development company. We have helped multiple clients from small medium businesses to big brands from various industry to create their website / mobile apps user experiences .</div>
			<div class="text-white font--poppins md:font--size-17 mb-3">We are part of the conscious advertising network</div>
			<div class="text-white font--poppins md:font--size-17">We are mentored by Schbang</div>
		</div>

		<div class="grid grid-cols-2 grid-flow-col md:grid-cols-3 gap-x-5 md:gap-x-0 mb-6 md:mb-20 ">
			<div class="flex flex-col mb-8 md:mb-0 ">
				<div style="color: #949494;" class="font--poppins mb-2 md:font--size-17  font--poppins uppercase">quick links</div>
				<a href="{{ url('/') }}" class="text-white mb-2 md:font--size-18 font--poppins">Home</a>
				<a href="#" class="text-white mb-2 md:font--size-18 font--poppins">Career</a>
				<a href="{{ url('contact-us') }}" class="text-white mb-2 md:font--size-18 font--poppins">Contact Us</a>
				<a href="{{ url('our-clients') }}" class="text-white mb-2 md:font--size-18 font--poppins">Our Client</a>
			</div>
			<div class="flex flex-col mb-8 md:mb-0">
				<div style="color: #949494;" class="mb-2 md:font--size-17  font--poppins uppercase">Social Media</div>
				<a href="#" class="text-white mb-2 md:font--size-18 font--poppins">Instagram</a>
				<a href="#" class="text-white mb-2 md:font--size-18 font--poppins">Facebook</a>
				<a href="#" class="text-white mb-2 md:font--size-18 font--poppins">Twitter</a>
			</div>
			<div class="flex flex-col mb-8 md:mb-0">
				<div style="color: #949494;" class="mb-2 md:font--size-17  font--poppins uppercase">About</div>
				<a href="{{ url('terms-and-conditions') }}" class="text-white mb-2 md:font--size-18 font--poppins">Terms</a>
				<a href="#" class="text-white mb-2 md:font--size-18 font--poppins">Privacy</a>
				<a href="{{ url('press-release') }}" class="text-white mb-2 md:font--size-18 font--poppins">Press Release</a>
			</div>
		</div>


		{{-- dekstop --}}
		<div class="hidden md:flex justify-between items-center">
			<div class="flex items-center gap-x-8">
				<div class="text-white font--size-17 font--poppins">© {{ date('Y') }} Felicity Media Private Limited</div>
				<div class="text-white font--size-17 font--poppins">hello@felicitymedia.in</div>
				<div class="text-white font--size-17 font--poppins">+91-7738180136</div>
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
			<div class="text-white font--poppins">© {{ date('Y') }} Felicity Media Private Limited</div>
			<div class="text-white font--poppins">hello@felicitymedia.in</div>
			<div class="flex justify-between">
				<div class="text-white font--poppins">+91-7738180136</div>
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
