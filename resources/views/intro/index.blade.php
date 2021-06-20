<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Felicity | Integrated Marketing Solutions Agency</title>
	<meta name=”robots” content="index, follow">
	<meta name="theme-color" content="#d65244">
	<meta name="apple-mobile-web-app-status-bar-style" content="#d65244">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta content='yes' name='apple-mobile-web-app-capable'/>
	<meta content='yes' name='mobile-web-app-capable'/>

	<meta name="description" content="Felicity excels in Video Production, Digital Marketing, Sonic Branding, Voice Search, Optimization, and Marketing Gamification.">
	
	<meta name="twitter:title" content="
			Felicity | Integrated Marketing Solutions Agency.
		" />
  	<meta name="twitter:card" content="summary" />
  	<meta name="twitter:creator" content="@mediafelicity" />
  	<meta property="og:url" content="{{url('/')}}" />
  	<meta property="og:title" content="
  			Felicity | Integrated Marketing Solutions Agency.
		" />


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}"/>
	<link rel="stylesheet" href="{{asset('/css/app.css?new')}}">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129747187-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-129747187-1');
	  gtag("event", "page_view", {
		  page_location: "{{url()->current()}}",
		});
	</script>
	<style>
        body {
            font-family: 'Kollektif', sans-serif;
        }
    	::-webkit-scrollbar {
		  width: 5px;
		  height: 5px;
		}

		/* Track */
		::-webkit-scrollbar-track {
		  background: #f1f1f1;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
		  background: #888;
		}
    </style>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	<style type="text/css">
		.vidcon.hori{
			width: 100vw;top:50%;transform:translateY(-50%);left: 0;
		}
		.vidcon.veri{
			width: 100vw;top:0;left: 0;
		}

		.vidbg.hori{
			width: 100vw;bottom: 0;left: 0;
		}
		.vidbg.veri{
			height: 100vh;left: 50%;transform: translateX(-50%);top: 0;
		}
		.floating-action{
	    cursor: pointer;
	    color: white;
	    background: #842e257d;
	    position: absolute;
	    right: 28px;
	    top: 75vh;
	    z-index: 200;
	    width: 50px;
	    height: 50px;
	    border-radius: 50%;
	    animation: zoomin 1s ease infinite;
	}
	.floating-action img{
	    top: 50%;
	    left: 54%;
	    height: 20px;
	    width: 20px;
	    position: relative;
	    transform: translateY(-50%) translateX(-50%);;
	}
	@keyframes zoomin{
		0%{
			opacity: .5;
			transform: scale(.9);
		}
		50%{
			opacity: 1;
			transform: scale(1);
		}
		100%{
			opacity: .5;
			transform: scale(.9);
		}

	}
	.IIV::-webkit-media-controls-play-button,
	 .IIV::-webkit-media-controls-start-playback-button {
	     opacity: 0;
	     pointer-events: none;
	     width: 5px;
	 }
	</style>	

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/iphone-inline-video.min.js')}}" ></script>

</head>
<body>
	<script type="text/javascript">
		if(localStorage.getItem('has-watch')=="true"){
         	// window.location.href = "{{ url('/home') }}";
		}
	</script>
<div style="position:absolute;width: 100vw;bottom: 0;left: 0;top: 0;z-index: 250;background: #d65244;" id="loading">
	<div style="position:absolute;top: 50%;width: 100%;left: 0;transform: translateY(-50%);display: none;" class="text-center logo" >
		<img src="{{asset('images/logo/logo.png?new')}}" style="max-width:100px;width: 30%;" class="mx-auto">
	</div>

	<div style="position:absolute;top: 75vh;left: 50%;transform: translateX(-50%);" id="gif" >
		<img src="{{asset('images/loading.gif')}}" style="width: 100px;">
	</div>
	<div style="position:absolute;top: 75vh;left: 50%;transform: translateX(-50%);display:none;" id="confirm" >
		<button style="
	    animation: zoomin 3s ease infinite;" class="flex justify-center  items-center border border-white py-4 px-5 rounded-full text-white text-sm" onclick="play()" >See What’s Possible </button>
	</div>

</div>
<script type="text/javascript">
		setTimeout(function(){
			$('.logo').fadeIn()
		},1000);
	
</script>
<div style="position: relative;text-align: center;overflow: hidden;height: 100vh;background: #010001">
	<video preload="none" webkit-playsinline playsinline class="vidcon hori video" style="position: absolute;z-index: 90;" >
	  <source src="" class="vidsource" type="video/mp4">
	</video>
	<!-- <video preload="none" class="vidbg video" muted="" style="position: absolute;z-index: 80;">
	  <source src="" class="vidsource" type="video/mp4">
	</video> -->
	<div class="floating-action next text-center">
	  <img src="{{ asset('images/icons/next.png') }}" alt="">
	</div>
</div>  
	
    <script>
    	enableInlineVideo(document.querySelector('.vidcon'));
    	function reloadVideo(){
    		console.log('reload')
    		width = $(window).width();
    		height = $(window).height();
    		ratio = width/height;
    		console.log(width/height);
    		if(width>=height){
    			$('.vidcon, .vidbg').removeClass('veri');
    			$('.vidcon, .vidbg').addClass('hori');
    			if(ratio>1.6){
	    			$('.vidsource').attr('src','{{ asset('videos/Opening16x9.mp4') }}');
    			}else{
	    			$('.vidsource').attr('src','{{ asset('videos/Opening1x1.mp4') }}');
	    		}
    		}else{
    			$('.vidcon, .vidbg').removeClass('hori');
    			$('.vidcon, .vidbg').addClass('veri');
    			if(ratio>0.8){
    				$('.vidsource').attr('src','{{ asset('videos/Opening4x5.mp4') }}');
    			}else{
    				$('.vidsource').attr('src','{{ asset('videos/Opening9x16.mp4') }}');
    			}    			
    		}
    		console.log("load");
    		document.querySelector('.vidcon').crossorigin = 'anonymous';
    		document.querySelector('.vidcon').load();
    	}

    	$(document).ready(function(){
    		reloadVideo()
    	})

		$(document).on('click', '.next', function () { 
		  window.location.href = "{{ url('/home') }}"
		})
		$(window).on('resize', function () { 
			reloadVideo();
		})

    	document.querySelector('.vidcon').onended = function() {
    		localStorage.setItem('has-watch',"true");
         	window.location.href = "{{ url('/home') }}";
		};
		function play(){
			document.querySelector('.vidcon').play();	
			$('#loading').fadeOut();
		}
		document.querySelector('.vidcon').addEventListener('loadeddata', function() {
    		console.log("loaded");
			setTimeout(function(){
				// try{
					vidPlay = document.querySelector('.vidcon').play();
					if(!vidPlay){
			         	window.location.href = "{{ url('/home') }}";
					}else{
						vidPlay.then(res=>{
							$('#loading').fadeOut();

						}).catch((e)=>{
							$('#gif').fadeOut();
							$('#confirm').fadeIn();
							// console.log(e)
						});	
					}
				// }catch(err){
					// $('#confirm').fadeIn();
				// }
				// setTimeout(function(){

				// },2000)
			},3000)

		}, false);
    </script>
</body>
</html>