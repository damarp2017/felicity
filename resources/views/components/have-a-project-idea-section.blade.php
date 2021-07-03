<section  class="tag bg-white w-full  py-10 md:py-20">
		<div class="mx-4 md:app-container 2xl:px-40">
			<div class="w-full mb-10">
				<h2 class="text-3xl md:font--size-65  md:w-full font-semibold mb-4 md:mb-10">{!! $haveIdea ? $haveIdea->title : '' !!}</h2>
				<div class="text-base md:font--size-17 font--poppins w-full md:w-10/12 "
				style="letter-spacing: 0.02em;
				color: rgba(55, 55, 55, 0.46);
				opacity: 0.8;">{{ $haveIdea ? $haveIdea->subtitle : '' }}</div>
			</div>

			<form method="post" action="{{ route('home.haveidea') }}">
                @csrf
				<div class="block md:flex mb-5">
					<div class="w-full md:w-1/2">
						<div class="mb-3 md:mb--30 md:mr--28">
							<input type="text" class=" text--gray-dark font--gilroy-md w-full p-3 md:padding--form-we-have rounded-xl md:font--size-19 bg-gray-100 focus:outline-none" name="email" placeholder="Email Address" required>
						</div>
						<div class="mb-3 md:mb--30 md:mr--28">
							<input type="text" class="text--gray-dark font--gilroy-md w-full p-3 md:padding--form-we-have rounded-xl md:font--size-19 bg-gray-100 focus:outline-none" name="name" placeholder="Full Name" required="">
						</div>

					</div>
					<div class="w-full md:w-1/2">
						<div class="mb-3 md:mb--30">
							<input type="text" class="text--gray-dark font--gilroy-md w-full p-3 md:padding--form-we-have rounded-xl md:font--size-19 bg-gray-100 focus:outline-none" name="phone" placeholder="Phone Number" required="">
						</div>
						<div class="mb-3 md:mb--30">
							<input type="text" class="text--gray-dark font--gilroy-md w-full p-3 md:padding--form-we-have rounded-xl md:font--size-19 bg-gray-100 focus:outline-none" name="reason" placeholder="Reason to contact" required="">
						</div>
					</div>
				</div>
				<button class="w-full py-3 md:font--size-21 font--gilroy-md text-white text-center rounded bg--blue hover:zoom" type="submit">Send</button>
			</form>
		</div>
	</section>
