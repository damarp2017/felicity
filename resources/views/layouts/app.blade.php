<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Felicity</title>
	<link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://db.onlinewebfonts.com/c/0b51833ff62e4af8acb5fd3e2bf59e97?family=SF+Pro+Display" rel="stylesheet" type="text/css"/>
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
		.navbar{
			transition: all 200ms;
		}
		.navbar-mobile{

		    border-bottom-left-radius: 20px;
		    border-bottom-right-radius: 20px;
		}
		.navbar-mobile:not(.bg--blue){
			/*background:#3b28c2bf;*/
		    background: #3e2bc1c7;
		}
		.bg-tr{
			background:#3b28c2bf;

		}
		.logo-white{
			transition: transform 200ms;
		}
		.slider-control{
			cursor: pointer;
		}
		.h-screen-1\/2{
			height: 50vh;
		}
		.h-screen-2\/3{
			height: 75vh;
		}
		/*@media (min-width: 768px){
			.md\:h-screen{
				height: 100vh;
			}
		}*/
    </style>
	<link rel="stylesheet" href="{{asset('/css/app.css?new')}}">
	
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	

</head>
<body>
	<div style="position:absolute;width: 100vw;bottom: 0;left: 0;top: 0;z-index: 250;" class="bg--blue" id="loading">
		<div style="position:absolute;top: 50%;width: 100%;left: 0;transform: translateY(-50%);" class="text-center logo" >
			<img src="{{asset('images/logo/logo.png?new')}}" style="max-width:100px;width: 30%;" class="mx-auto">
		</div>
	</div>
	@yield('content')

	@include('layouts.__footer')

	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	@stack('scripts')
	<script type="text/javascript">
		$('.space-item').each(function(){
			width = $(this).parents('.space-area').width()/3;
			$(this).css('min-width',width);
		})
		const sliders = document.querySelectorAll('.slider');
		sliders.forEach(function(slider){
			let dotsElement = $('#process-slider').next().find(".slider-dot");
			dotsElement.html('');
			let parentWidth = $(this).width()
			let scrollWidth = $(this).get(0).innerWidth;
			let pagesTotal=Math.ceil(scrollWidth/parentWidth);
			for(var i=0;i<pagesTotal;i++){
				dotsElement.append(`<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full"></div>`);
			}
			let isDown = false;
			  let startX;
			  let scrollLeft;
			  slider.addEventListener('mousedown', (e) => {
			  	console.log('aa')
			    isDown = true;
			    slider.classList.add('active');
			    startX = e.pageX - slider.offsetLeft;
			    scrollLeft = slider.scrollLeft;
			    cancelMomentumTracking();
			  });
			  
			  
			  slider.addEventListener('mouseleave', () => {
			    isDown = false;
			    slider.classList.remove('active');
			  });
			  
			  
			  slider.addEventListener('mouseup', () => {
			    isDown = false;
			    slider.classList.remove('active');
			    beginMomentumTracking();
			  });
			  
			  
			  slider.addEventListener('mousemove', (e) => {
			    if(!isDown) return;
			    e.preventDefault();
			    const x = e.pageX - slider.offsetLeft;
			    const walk = (x - startX) * 3; //scroll-fast
			    var prevScrollLeft = slider.scrollLeft;
			    slider.scrollLeft = scrollLeft - walk;
			    velX = slider.scrollLeft - prevScrollLeft;
			  });
			  
			  // Momentum 
			  
			  var velX = 0;
			  var momentumID;
			  
			  slider.addEventListener('wheel', (e) => {
			    cancelMomentumTracking();
			  });  
			  
			  function beginMomentumTracking(){
			    cancelMomentumTracking();
			    momentumID = requestAnimationFrame(momentumLoop);
			  }
			  function cancelMomentumTracking(){
			    cancelAnimationFrame(momentumID);
			  }
			  function momentumLoop(){
			    slider.scrollLeft += velX;
			    velX *= 0.95; 
			    if (Math.abs(velX) > 0.5){
			      momentumID = requestAnimationFrame(momentumLoop);
			    }
			  }	
		})
		setTimeout(function(){
			$('#loading').fadeOut();
		},500)

		$('.slider-control').each(function(){
			$(this).on('click',function(){
				var target = $(this).attr('target');
				var action = $(this).attr('action');
				// console.log($(target));
				width = $(target).width();
				scroll = $(target).scrollLeft();
				if(action=='next'){
					$(target).animate({
						scrollLeft:scroll-width
					});
				}else{
					$(target).animate({
						scrollLeft:scroll+width
					});
				}
			})
			
		})
		  
	</script>
</body>
</html>