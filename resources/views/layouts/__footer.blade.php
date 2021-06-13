<section class="w-full overflow-x-hidden {{ request()->is('/') ? 'pt--308' : 'pt--153' }}  pb--41 bg--gradient-black">
	<div class="mx-4 md:app-container">
		<div class="{{ request()->is('/') ? 'md:ml--24' : '' }}">
			<div class="mb--62">
				<img class="mb-10 md:mb-20 h-10 md:h-auto" src="{{ asset('images/logo/logo.png') }}" alt="">
				<div class="text-white uppercase font--poppins mb-4 md:font--size-15" style="letter-spacing: 3px;">Made in India with ❤️</div>
				<div class="font--poppins mb-4 md:mb-7 md:font--size-17" style="color: #8C8C8C; line-height: 31px;">Felicity helps purpose-driven brands build sustainable and profitable businesses with conscious advertising.</div>
				<!-- <div class="text-white font--poppins md:font--size-17 mb-3">We are part of the conscious advertising network</div> -->
				<!-- <div class="text-white font--poppins md:font--size-17">We are mentored by Schbang</div> -->
			</div>
	
			<div class="grid grid-cols-2 md:flex md:flex-row mb--94">
				<div class="flex flex-col w-auto mb-8 md:mb-0 md:mr--150">
					<div style="color: #949494;" class="font--poppins mb-2 md:font--size-17  font--poppins uppercase">quick links</div>
					<a href="{{ url('/home') }}" class="text-white mb-2 md:font--size-18 font--poppins">Home</a>
					<a href="#" class="text-white mb-2 md:font--size-18 font--poppins">Career</a>
					<a href="{{ url('contact-us') }}" class="text-white mb-2 md:font--size-18 font--poppins">Contact Us</a>
					<!-- <a href="{{ url('our-clients') }}" class="text-white mb-2 md:font--size-18 font--poppins">Our Client</a> -->
				</div>
				<div class="flex flex-col mb-8 md:mb-0 md:mr--150">
					<div style="color: #949494;" class="mb-2 md:font--size-17  font--poppins uppercase">Social Media</div>
					<a href="#" class="text-white mb-2 md:font--size-18 font--poppins">Instagram</a>
					<a href="#" class="text-white mb-2 md:font--size-18 font--poppins">Facebook</a>
					<a href="#" class="text-white mb-2 md:font--size-18 font--poppins">Twitter</a>
				</div>
				<div class="flex flex-col mb-8 md:mb-0">
					<div style="color: #949494;" class="mb-2 md:font--size-17  font--poppins uppercase">About</div>
					<a href="{{ url('terms-and-conditions') }}" class="text-white mb-2 md:font--size-18 font--poppins">Terms</a>
					<a href="{{url('privacy')}}" class="text-white mb-2 md:font--size-18 font--poppins">Privacy</a>
					<a href="{{url('about-us')}}" class="text-white mb-2 md:font--size-18 font--poppins">About Us</a>
					<!-- <a href="{{ url('press-release') }}" class="text-white mb-2 md:font--size-18 font--poppins">Press Release</a> -->
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
	</div>
	
</section>
