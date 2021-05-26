@extends('layouts.app')
@section('content')
	<header class="w-full overflow-x-hidden bg--header-gradient relative" style="height: 999px">
		@include('layouts.__navigation')
		<img src="{{ asset('images/bg/circle-header.png') }}" class="absolute top-0 right-0 h-full">
		<div class="flex flex-col h-full justify-center items-center">
			<div class="text-2xl text-white uppercase">We design the</div>
				<div class="text-white font-semibold text-9xl"> Future</div>
				<div class="text-2xl text-white uppercase mb-3">that next generation will witness</div>
				<div class="text-xl text-white opacity-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis diam elementum <br> arcu eu cras egestas ac adipiscing. Et arcu, elementum molestie sed bland</div>
		</div>
	</header>

	<section class="bg--section w-full overflow-x-hidden pt-36">
		<div class="mx-36">
			<div class="flex mb-10 flex-col text-center justify-center">
				<div class="mb-6 text-7xl font-semibold">About Us</div>
				<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class 
					<br> brands to make your products to for world-class brands to make your . </div>
			</div>

			<div class="mb-5">
				<div class="flex items-center mb-3">
					<div class="mr-4 "><img class="w-24 h-2" src="{{ asset('images/utilities/hr.png') }}"></div>
					<div class="text--pink text-7xl font-bold">Our Vision</div>
				</div>
				<div class="text-2xl text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live for world-class products to live for world-class brands to make your products to live for world-class brands to make your products tofor world-class bra</div>
			</div>

			<div class="flex items-center mb-20">
				<div class="w-1/2">
					<div class="flex items-center mb-3">
						<div class="mr-4 "><img class="w-24 h-2" src="{{ asset('images/utilities/hr.png') }}"></div>
						<div class="text--pink text-7xl font-bold">Our Manifestos</div>
					</div>
					<div class="text-2xl text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live for world-class products to live for world-class brands to make your products to live for world-class brands to make your products tofor world-class bra</div>
				</div>
				<div class="w-1/2"><img src="{{ asset('images/home/our_manifestos.png') }}"></div>
			</div>

			<div class="flex gap-x-8 mb-10">
				<div class="w-1/3">
					<div class="bg-white rounded-lg flex p-8 items-center mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/4.png') }}">
						<div>
							<div class="text-2xl mb-2 font-semibold text--pink">We Win Together</div>
							<div class="text-xl">When your business wins, we win.</div>
						</div>
					</div>

					<div class="bg-white rounded-lg flex p-8 items-center mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/5.png') }}">
						<div>
							<div class="text-2xl mb-2 font-semibold text--pink">We Solve Your Problems</div>
							<div class="text-xl">We simplify technology so you can focus on your brand.</div>
						</div>
					</div>
					
				</div>
				<div class="w-1/3">
					<div class="bg-white rounded-lg flex p-8 items-center mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/2.png') }}">
						<div>
							<div class="text-2xl mb-2 font-semibold text--pink">We Worship Data </div>
							<div class="text-xl">Our creativity is driven by data and human experiences.</div>
						</div>
					</div>

					<div class="bg-white rounded-lg flex p-8 items-center mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/3.png') }}">
						<div>
							<div class="text-2xl mb-2 font-semibold text--pink">We Are Bold</div>
							<div class="text-xl">We dare to dream, and we get it done.</div>
						</div>
					</div>
				</div>
				<div class="w-1/3">
					<div class="bg-white rounded-lg flex p-8 items-center mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/6.png') }}">
						<div>
							<div class="text-2xl mb-2 font-semibold text--pink">We Move Fast</div>
							<div class="text-xl">Quicker decision and patience, win us games.</div>
						</div>
					</div>

					<div class="bg-white rounded-lg flex p-8 items-center mb-8">
						<img class="w-10 h-10 mr-5" src="{{ asset('images/home/items/1.png') }}">
						<div>
							<div class="text-2xl mb-2 font-semibold text--pink">We Know Your Consumer</div>
							<div class="text-xl">We know how to make your consumer, your customer.</div>
						</div>
					</div>
				</div>
			</div>

			<div class="flex justify-center gap-x-4 mb-20">
				<button class="bg--gradient-black py-4 px-6 text-white text-xl rounded-full"> Know More </button>
				<button class="bg--gradient-black py-4 px-6 text-white text-xl rounded-full"> Download Company Deck </button>
			</div>
			 
		</div>
		
		
	</section>


	<section class="bg-white min-h-screen w-full overflow-x-hidden pt-32">
		<div class="mx-36">
			<div class="flex items-center mb-20">
				<div class="mr-4 "><img class="w-24 h-2" src="{{ asset('images/utilities/hr.png') }}"></div>
				<div class="text--pink text-7xl font-bold">Our Capabilities</div>
			</div>
	
			<div class="flex mb-24">
				<div class="w-1/2">
					<img src="{{ asset('images/home/capabilities.png') }}">
				</div>
				<div class="w-1/2">
					<div class="text-black text-7xl font-bold mb-3">
						<div >Marketing</div>
						<div class="text--pink">Strategy</div>
					</div>
					<div class="text-xl text--grey-transparent mb-4">We fuel the growth of purpose driven brands through strategy activation, design empowerment, and market adoption. From cultivating new ideas to connecting the dots for customers or users, these are our core principles We fuel the growth of purpose driven brands through strategy activation.</div>
					<button class="text-white rounded-full py-4 px-20 bg--pink">See More</button>
				</div>
			</div>

			<div class="flex justify-between items-center">
				<div class="flex gap-x-4 items-center">
					<div class="bg--pink w-10 h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-2 rounded-full"></div>
					<div class="bg-gray-300 w-5 h-2 rounded-full"></div>
				</div>
				<div class="flex gap-x-4 items-center">
					<div class="bg-gray-200 w-10 flex items-center justify-center h-10 rounded-full">
						<img src="{{ asset('images/utilities/prev.png') }}">
					</div>
					<div class="bg-gray-200 w-10 flex items-center justify-center h-10 rounded-full">
						<img src="{{ asset('images/utilities/next.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-white w-full overflow-x-hidden pt-36">
		<div class="mx-36">
			<div class="flex mb-10 flex-col">
				<div class="mb-6 text-7xl font-semibold">Team That Makes It Possible</div>
				<div class="text-2xl text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
			</div>

			<div class="flex flex-nowrap gap-x-8" style="overflow-x: auto">
				<div class="w-1/3">
					<div class="bg--blue-blur rounded-lg h-4/5 mb-10">
						<img src="https://s3-alpha-sig.figma.com/img/e7e7/bc4d/d67f7fa0b95a95c3efb257620ff61574?Expires=1623024000&Signature=H6HIZne26MbOiU~DkUpTz5spNRU4~46nweuQcGcJMQWQwBbvMr7CUviiTxFxum-Ae~LcdG-7Bw9Dn~NGTa8nrWgOxOuKPYfC57xQsToA41Ok4e3DlLN8Hp1BHclzojnTzq07MdO-gNdYAk5QZS8kew7ChovgiUQ~eJNSEtb-R9y9agEUvogbFm3xITDKc83HRLT7KsKlAv9PYWX7UFK0~v3lSErQGN0N4HgxhLnxVyWtTRGta0enSru6WfK0Rthmh11bzwfP2lusJqw1K6mUlqXaMTWwkMLilOf1YfoIBehItkKCWX3M0pEXNlRBXvqCpb7Gi-WWgR1~u1ANqtrSaw__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA">
					</div>
					<div class="text-gray-900 text-2xl font-semibold">Bruce Wayne</div>
					<div class="text-gray-900 text-md uppercase">WEB DEVELOPER</div>
				</div>

				<div class="w-1/3">
					<div class="bg--green-blur rounded-lg h-4/5 mb-10">
						<img src="https://s3-alpha-sig.figma.com/img/efab/4d18/9a5bb1887d28292ef5a72ebbaeb10718?Expires=1623024000&Signature=L2VqZPK5jUU1R1jIRordr4VOPlfnKqF0R-uHAAwsJpPTHymYYW9PY3f1~cmvW-eD09i6Ay8eDKt-R4qJNEVnYRS2dQMHX2ULVA61oEeMeSJapwRVj8dWFE6ZqS3lEvGgmlyIaDSksUNihpgUkfyWMXs8FM7C7f2RRNSqe17zT8zE6DonhrJKJ8V6kPDW3fFMn-abVSf5vLfbokFIUj~15oTUMiJhMPaRcXjBLVmILvsjxO7j6BBBMF24PYMVkfeaxLu5nhHO6q9JJg09d-bNkSedAkmYKYwA94R7oj~F9Rt2rCdziBgUvRURGHtAxBnX2iWdQyXsgtCEAAigue4CIg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA">
					</div>
					<div class="text-gray-900 text-2xl font-semibold">Diana Prince</div>
					<div class="text-gray-900 text-md uppercase">GRAPHIC DESIGNER</div>
				</div>

				<div class="w-1/3">
					<div class="bg--yellow-blur rounded-lg h-4/5 mb-10">
						<img src="https://s3-alpha-sig.figma.com/img/e5ce/ac9a/514aa35d51f436f80d7f8bb89ce2247f?Expires=1623024000&Signature=LTl9RJNrjdtSJqq4VlfRU8kDxlKyuREmtBP8DNxaIBKn8CYK9140Jhk4EBlkOU0MAhERgXH2OYdI-hAIlDUF3mcLpRRYVOBstQXqk82dBxhNgzYaffyojdOAjv2LDGM~J0MyD8Klf0739NbIuz-sXRbyfYxBrWWWqBOJQStbR3v3JzhSZGhhItxH45AMPYlkJrPxIOsfX9ddWJoq2pjcQFkk2oGXgB0YK5wAFtmctsgMe1C1p2bKoxEEilbVJy5np~X3bnr9PReHTzZrLhaWla-waTWUYl1Htf74pTb0U1FBQlYIpz1gE-Uv4HggLnJXWbAZvDUoS4L7H1fc-YTl7g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA">
					</div>
					<div class="text-gray-900 text-2xl font-semibold">Clark Kent</div>
					<div class="text-gray-900 text-md uppercase">GRAPHIC DESIGNER</div>
				</div>

				<div class="w-1/3">
					<div class="bg--red-blur rounded-lg h-4/5 mb-10">
						<img src="https://s3-alpha-sig.figma.com/img/e5ce/ac9a/514aa35d51f436f80d7f8bb89ce2247f?Expires=1623024000&Signature=LTl9RJNrjdtSJqq4VlfRU8kDxlKyuREmtBP8DNxaIBKn8CYK9140Jhk4EBlkOU0MAhERgXH2OYdI-hAIlDUF3mcLpRRYVOBstQXqk82dBxhNgzYaffyojdOAjv2LDGM~J0MyD8Klf0739NbIuz-sXRbyfYxBrWWWqBOJQStbR3v3JzhSZGhhItxH45AMPYlkJrPxIOsfX9ddWJoq2pjcQFkk2oGXgB0YK5wAFtmctsgMe1C1p2bKoxEEilbVJy5np~X3bnr9PReHTzZrLhaWla-waTWUYl1Htf74pTb0U1FBQlYIpz1gE-Uv4HggLnJXWbAZvDUoS4L7H1fc-YTl7g__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA">
					</div>
					<div class="text-gray-900 text-2xl font-semibold">Diana Prince</div>
					<div class="text-gray-900 text-md uppercase">GRAPHIC DESIGNER</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg--section w-full overflow-x-hidden pt-36">
		<div class="mx-36">
			<div class="flex mb-10 flex-col">
				<div class="mb-6 text-7xl font-semibold">Case Studies</div>
				<div class="text-2xl text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class 
					<br> brands to make your products to for world-class brands to make your . </div>
			</div>

			<div class="flex gap-x-4 mb-20">
				<button class="bg--gradient-pink py-3 px-10 text-white rounded-full"> Explore Menu </button>
				<button class="bg--gradient-pink py-3 px-10 text-white rounded-full"> Work With Us </button>
			</div>

			<div class="bg-white rounded-b-lg mb-10">
				<img class="h-48 w-full object-cover object-center rounded-t-lg" src="{{ asset('images/case_studies/ilus.png') }}" alt="">
				<div class="p-5 rounded-b-lg">
					<div class="flex justify-between mb-3">
						<div class="text-2xl font-semibold">Roady V3.0 Ilustration</div>
						<div class="text-lg">FEATURED</div>
					</div>
					
					<div class="text--pink font-semibold mb-3">ILLUSTTRATION DESIGN</div>
					<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
				</div>
			</div>

			<div class="bg-white rounded-b-lg  mb-10">
				<img class="h-48 w-full object-cover object-center rounded-t-lg" src="{{ asset('images/case_studies/ilus.png') }}" alt="">
				<div class="p-5 rounded-b-lg">
					<div class="flex justify-between mb-3">
						<div class="text-2xl font-semibold">Roady V3.0 Ilustration</div>
						<div class="text-lg">FEATURED</div>
					</div>
					
					<div class="text--pink font-semibold mb-3">ILLUSTTRATION DESIGN</div>
					<div class="text-xl text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg--gray-light w-full overflow-x-hidden py-36">
		<div class="mx-36">

			<div class="flex items-center -mr-36">
				<div class="w-1/3 mr-20">
					<div class="text-7xl font-semibold mb-4">Insights</div>
					<div class="mb-7 text-2xl text--grey-transparent">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div>
					<button class="bg--pink text-white py-3 px-6 rounded-full"> See More Insights </button>
				</div>
				@for ($i = 0; $i < 2; $i++)
					<div class="w-1/4 p-3 bg-white rounded-lg mr-10">
						<img class="mb-4 h-52 w-full object-cover object-center" src="https://s3-alpha-sig.figma.com/img/e20d/80e1/d6f3696bbae0db1c3de0f0504b41f55d?Expires=1623024000&Signature=IznfXignsEomsP2xFY6MX3f9jzLqLQTlkver8Zt-usqAYKeN8ovNdHKllgWi-UPdU1BNAfUZCNCcNnWI28gbYTQG5FgMwFUwKY-FFoizpedQvncDrq9GRynGJnFm~EMdpFdZ7gb4ET0ZdoG7xepXLeJTs5Fqhvsul8PUNoCHSBPIF-jOAZTHALDIBkHSZUxh~4bQ0ZgOYU46Sz5hxV5BOockbe13Lrgjd8BavdKeZpx0n1FAujFEN04VCqypM7SuSluI3mP5EcScU3ziG5RnVGUw4G3bfuT0mbWNGfMK5GoQc8jjQry1PsXehmPAQ9FaNFDOzqpmrJ4Nwll64NRYqg__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA">
						<div class="font-semibold text-xl">Design process we have is unexpectional</div>
						<div class="text--grey-transparent mb-6 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat dolor a urna vel orci interdum amet, natoque id. Egestas sed adipiscing .</div>
						<a href="" class="text--pink  font-semibold">Learn More</a>
					</div>	
				@endfor
				
			</div>

		</div>
	</section>

	<section  class="bg-white w-full overflow-x-hidden py-36">
		<div class="mx-36">
			<div class="w-3/4 mb-10">
				<div class="text-7xl font-semibold mb-4">Have a <span class="text--pink">Project</span> Idea ?</div>
				<div class="text--grey-transparent">Engineering technologies that bring people together in the real world is both inspiring and daunting. We're tackling challenges in search relevance, payments, fraud prevention, discrimination, and growth—all while maintaining a beautiful expe</div>
			</div>

			<form action="">
				<div class="flex mb-5">
					<div class="w-1/2">
						<div class="m-3">
							<input type="text" class="w-full p-3 bg-gray-100 focus:outline-none" placeholder="Email Address">
						</div>
						<div class="m-3">
							<input type="text" class="w-full p-3 bg-gray-100 focus:outline-none" placeholder="Full Name">
						</div>
						
					</div>
					<div class="w-1/2">
						<div class="m-3">
							<input type="text" class="w-full p-3 bg-gray-100 focus:outline-none" placeholder="Phone Number">
						</div>
						<div class="m-3">
							<input type="text" class="w-full p-3 bg-gray-100 focus:outline-none" placeholder="Reason to contact">
						</div>
					</div>
				</div>
				<button class="w-full py-3 text-white text-center rounded bg--pink">Send</button>
			</form>
		</div>
	</section>


	<section class="bg--section w-full overflow-x-hidden py-36">
		<div class="mx-36">
			<div class="flex items-center">
				<div class="w-1/2">
					<img src="{{ asset('images/home/join.png') }}" alt="">
				</div>
				<div class="w-1/2">
					<div class="text-7xl font-semibold mb-4">Join the <span class="text--pink">Team</span></div>
					<div class="text--grey-transparent mb-3">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products tofor world-class brands to make your products </div>
					<button class="bg--pink rounded-full text-white py-3 px-10">Explore Profiles</button>
				</div>
			</div>
		</div>
	</section>

	<section class="mx-36 -mb-32 z-10 relative overflow-x-hidden rounded-lg">
		<div class="bg--pink p-10">
			<div class="text-3xl font-semibold text-white mb-3">Learn Something New</div>
			<div class="text-white opacity-50 mb-4">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to for world-class brands to make your products to live .</div>
			<div class="flex gap-x-4">
				<div class="flex-1"><input type="text" 
					class="w-full placeholder-white bg-red-400 rounded p-4 outline-none focus:outline-none text-white"
					placeholder="Email Address"></div>
				<div class="flex-1"><input type="text" 
					class="w-full placeholder-white bg-red-400 rounded p-4 outline-none focus:outline-none text-white"
					placeholder="Full Name"></div>
				<button class="bg-white text--pink rounded p-4 outline-none focus:outline-none">Subscribe</button>
			</div>
		</div>
	</section>

@endsection