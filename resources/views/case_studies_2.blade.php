@extends('layouts.app')
@section('content')
	@include('layouts.__navigation_light')

	<section class="bg-white w-full overflow-x-hidden pt-32 pb-10">
		<div class="mx-0 md:mx-20">
			<div class="bg-gray-200 w-full mb-20" style="height: 3732px"></div>

			<div class="flex gap-x-7 items-center justify-center mb-20">
				<div class="bg-gray-200 h-12 w-12 p-3 rounded-full -mt-9">
					<img src="{{ asset('images/utilities/sosmed/twitter-black.png') }}" alt="">
				</div>
				<div>
					<div class="bg-blue-700 w-20 h-20 rounded-full p-3 flex justify-center items-center">
						<img class="w-8 h-8" src="{{ asset('images/utilities/slap.png') }}" alt="">
					</div>
					<div class="text-gray-600 text-xl mt-4 text-center">236</div>
				</div>
				<div class="bg-gray-200 h-12 w-12 p-3 rounded-full -mt-9">
					<img src="{{ asset('images/utilities/sosmed/fb-black.png') }}" alt="">
				</div>
			</div>
		</div>
	</section>
@endsection