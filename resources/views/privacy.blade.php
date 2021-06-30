@extends('layouts.app')
@section('content')
	@include('layouts.__navigation_light')

	<section class="bg-white w-full overflow-x-hidden py-20 md:py-10">
		<div class="mx-4 md:app-container 2xl:px-40 pt-20">
			<div class="mb-10">
				<h1 class="mb-3 md:mb-8 font-semibold text-4xl md:font--size-55 font--gilroy-bold">{{ $datas ? $datas->title : '' }}</h1>
				<!-- <div class="text--typography text-base md:font--size-18">for world-class brands to make your products to live for world-class brands to make your products to live for world-class brands to make your products to</div> -->
			</div>

			<div>
                <p>{!! $datas ? $datas->description : '' !!}</p>
					{{-- <div class="text--typography text-sm mb-10 md:font--size-18">
						At Felicity, accessible from <a class="text--blue" href="//www.felicitymedia.in">www.felicitymedia.in</a>, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Felicity and how we use it.
						<br/>
						If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.
						<br/>
						This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collected in Felicity. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the Privacy Policy Generator.
						<br/>
						<br/>
						<h5 class="text-2xl font-bold text-black">Consent</h5>
						By using our website, you hereby consent to our Privacy Policy and agree to its terms.
						<br/>
						<br/>
						<h5 class="text-2xl font-bold text-black">Information we collect</h5>
						The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.
						<br/>
						If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.
						<br/>

						<br/>
						<h5 class="text-2xl font-bold text-black">Cookies and Web Beacons</h5>
						Like any other website, Felicity uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.
						<br/>
						For more general information on cookies, please read "What Are Cookies".
						<br/>
						<br/>
						<h5 class="text-2xl font-bold text-black">Advertising Partners Privacy Policies</h5>
						You may consult this list to find the Privacy Policy for each of the advertising partners of Felicity.
						<br/>
						Third-party ad servers or ad networks use technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Felicity, which are sent directly to users' browsers. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.
						<br/>
						Note that Felicity has no access to or control over these cookies that are used by third-party advertisers.
						<br/>
						<br/>
						<h5 class="text-2xl font-bold text-black">Third Party Privacy Policies</h5>
						Felicity's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.
						<br/>
						You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.
						<br/>
						<br/>
						<h5 class="text-2xl font-bold text-black">CCPA Privacy Rights (Do Not Sell My Personal Information)</h5>
						Under the CCPA, among other rights, California consumers have the right to:
						<br/>
						Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.
						<br/>
						<br/>
						Request that a business delete any personal data about the consumer that a business has collected.
						<br/>
						<br/>
						Request that a business that sells a consumer's personal data, not sell the consumer's personal data.
						<br/>
						If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.
						<br/>
						<br/>

						<h5 class="text-2xl font-bold text-black">GDPR Data Protection Rights</h5>
						We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:
						<br/>
						The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.
						<br/>
						The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.
						<br/>
						The right to erasure – You have the right to request that we erase your personal data, under certain conditions.
						<br/>
						The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.
						<br/>
						The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.
						<br/>
						The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.
						<br/>
						If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.
						<br/>
						<br/>
						<h5 class="text-2xl font-bold text-black">Children's Information</h5>
						Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.
						<br/>
						Felicity does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.
						<br/>

					</div> --}}

			</div>
		</div>
	</section>
@endsection
