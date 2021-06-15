<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Felicity</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="theme-color" content="#3B28C2">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129747187-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-129747187-1');
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
		.navbar{
			transition: all 200ms;
		    border-bottom-left-radius: 20px;
		    border-bottom-right-radius: 20px;
		}
		.bg--navbar{
		    background: #3e2bc1c7;

		}
		.navbar-mobile{
			transition: all 200ms;
		    border-bottom-left-radius: 20px;
		    border-bottom-right-radius: 20px;
		}
		.navbar-mobile:not(.bg--blue){
			/*background:#3b28c2bf;*/
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
	<style type="text/css">
		h1,h2{
			font-family: "Source Serif Pro";
			font-weight: 700!important;
		}
		.hover\:zoom{
			transition: all 300ms;			
		}
		.hover\:zoom:hover{
			transform: scale(1.025);
		}
		.tag {
		  opacity: 0;
		  transform: translate(0, 10vh);
		  transition: all 1s;
		}

		.tag.visible {
		  opacity: 1;
		  transform: translate(0, 0);
		}

    .wave-wrapper{
        position: absolute;
        height: 100%;
        left: 0;
        width: 100%;
        z-index: 17;
        pointer-events: none;
    }
    .wave{
        transition: all .5s ease-in-out;
    }
    .wave > svg{
        transition: width 2s;
    }
    .wave1{
        position: absolute;
        right: 0%;
        top: -20%;
        transform: rotate(45deg) scale(2);
    }
    .wave1 > svg{
        opacity: .2;
        animation: waves1 linear 20s infinite;
        width: 200%;
    }
    .wave2{
        position: absolute;
        right: 5%;
        top:-10%;
        transform: rotate(45deg) scale(3);
    }

    
    .wave2 > svg{
        opacity: .2;
        animation: waves1 linear 10s infinite;
        width: 200%;
    }
    

    .wave2.big{
        right: 10%;
        top: -10%;
        transform: rotate(20deg) scale(3);
    }
    .wave1.big{
        top: 10%;
        transform: rotate(50deg) scale(2);
    }
    

    @keyframes waves1{
        0% {
            transform: translateX(0);
        }
        100%{
            transform: translate(-50%);
        }
    }

	</style>
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
	<script type="text/javascript">
		$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
	</script>
	@stack('scripts')
	<script type="text/javascript">
		$(document).on("scroll", function() {
		  var pageTop = $(document).scrollTop();
		  var pageBottom = pageTop + ($(window).height());
		  var tags = $(".tag");

		  for (var i = 0; i < tags.length; i++) {
		    var tag = tags[i];

		    if ($(tag).position().top < pageBottom) {
		      $(tag).addClass("visible");
		    } else {
		      $(tag).removeClass("visible");
		    }
		  }
		});
	</script>
	<script type="text/javascript">
		
		$('.space-item').each(function(){
			width = $(this).parents('.space-area').width()/3;
			$(this).css('min-width',width);
		})
		$('.space-item-1').each(function(){
			width = $(this).parents('.space-area').width();
			$(this).css('min-width',width);
		})
		const sliders = document.querySelectorAll('.slider');

		sliderHandler = function(slider){
			this.slider=slider;
			this.dotsElement = $(this.slider).parents('section').find(".slider-dot");
			this.dotsElement.html('');
			this.parentWidth = $(this.slider).width()
			this.scrollWidth = $(this.slider).get(0).scrollWidth;
			this.pagesTotal=Math.ceil(this.scrollWidth/this.parentWidth);
			for(var i=0;i<this.pagesTotal;i++){
				if(i==0){
					this.dotsElement.append(`<div class="bg--blue w-10 h-1 md:h-2 rounded-full it"></div>`);
				}else if(i<3){
					this.dotsElement.append(`<div class="bg-gray-300 w-5 h-1 md:h-2 rounded-full it"></div>`);
				}else{
					this.dotsElement.append(`<div class="bg-gray-300 w-1 h-1 md:h-2 rounded-full it"></div>`);
				}
			}
			this.isDown = false;
			this.startX;
			this.newP=0;

			this.velX = 0;
			this.momentumID;
			this.curpage = ()=>{
				page = this.slider.scrollLeft/this.slider.offsetWidth;
				// console.log(this.slider,this.slider.offsetWidth)
				return page;
			}
			this.touchStart = (e)=>{
				console.log('start');
				if(e.type=='touchstart'){
					e = e.changedTouches[0];
				}
				this.isDown = true;
				this.slider.classList.add('active');
				this.startX = e.pageX - this.slider.offsetLeft;
				this.scrollLeft = this.slider.scrollLeft;
				cancelMomentumTracking();
			}
			this.touchCancel = () => {
				console.log('cancel');
				this.isDown = false;
				this.slider.classList.remove('active');
			}

			this.touchEnd = (e) => {
				var type = e.type;
				if(type=='touchend'){
					e = e.changedTouches[0];
				}else{
					this.slider.classList.remove('active');
					this.isDown = false;
				}


				beginMomentumTracking();
				let pagesTotal=Math.ceil(this.slider.scrollWidth/this.slider.offsetWidth);
				p=(this.slider.scrollLeft/this.slider.offsetWidth);
				endX =  e.pageX - this.slider.offsetLeft;
				posX = (this.startX-endX);
				// console.log("endX",endX,"p",p,"startX",this.startX,"posX",posX)
				if(posX>0){
					if((endX/this.slider.offsetWidth)>0.25){
				    	p = Math.ceil(p);
				    }else{
				    	p = (this.slider.offsetLeft + posX);
				    	p = (p/this.slider.offsetWidth).toFixed(0);
				    	p = parseInt(p);
				    }
				}else{
					if((Math.abs(endX)/this.slider.offsetWidth)>0.25){
				    	p = Math.floor(p);
				    }else{
				    	p = (this.slider.offsetLeft + posX);
				    	p = (p/this.slider.offsetWidth).toFixed(0);
				    	p = parseInt(p);
				    }
				}
				
				
				this.newP=p*this.slider.offsetWidth;
				// // console.log("p",p,this.newP);
				// if(type=='touchend'){
					// console.log("tiu")
					// this.slider.scroll( { left: this.newP, behavior: 'smooth' })
				// }else{
					this.scrollAnimate();
				// }

			}
			this.scrollAnimate=()=>{
				if(this.newP<0){
					this.newP=0;
				}
				if(this.newP>this.slider.scrollWidth){
					return
				}
				this.momentumID = requestAnimationFrame(this.animate);
				this.dotsElement.children().removeClass('bg--blue');
				this.dotsElement.children().removeClass('w-10');
				this.dotsElement.children().addClass('bg-gray-300');
				// this.dotsElement.children().addClass('w-5');
				// console.log();
				$(this.dotsElement.children().get(p)).addClass('bg--blue');
				$(this.dotsElement.children().get(p)).addClass('w-10');
				// console.log(this.curpage());

			}
			this.animate=()=>{
				if(this.slider.scrollLeft<this.newP){
			    	this.slider.scrollLeft+=10;
			    	if(this.slider.scrollLeft<=this.newP){
			    		this.momentumID = requestAnimationFrame(this.animate);
			    	}
			    }else{
			    	this.slider.scrollLeft-=10;
			    	if(this.slider.scrollLeft>=this.newP){
			    		this.momentumID = requestAnimationFrame(this.animate);
			    	}
			    }
			}
			this.touchMove = (e) => {
				// console.log('move',e);
				if(!this.isDown) return;

				// e.preventDefault();
				const x = e.pageX - this.slider.offsetLeft;
				const walk = (x - this.startX) ; //scroll-fast
				var prevScrollLeft = this.slider.scrollLeft;
				this.slider.scrollLeft = this.scrollLeft - walk;
				this.velX = this.slider.scrollLeft - prevScrollLeft;
			}

			this.slider.addEventListener('mousemove', this.touchMove);
			// this.slider.addEventListener('touchmove',,{passive:true});

			this.slider.addEventListener('mousedown', this.touchStart,{passive:true});
			this.slider.addEventListener('touchstart', this.touchStart,{passive:true});


			this.slider.addEventListener('mouseleave', this.touchCancel,{passive:true});
			this.slider.addEventListener('touchcancel', this.touchCancel,{passive:true});


			this.slider.addEventListener('mouseup', this.touchEnd,{passive:true});
			this.slider.addEventListener('touchend', this.touchEnd,{passive:true});

			// Momentum 


			this.slider.addEventListener('wheel', (e) => {
				console.log(e);
				// cancelMomentumTracking();
			},{passive:true} ); 

			function beginMomentumTracking(){
				cancelMomentumTracking();
				this.momentumID = requestAnimationFrame(momentumLoop);
			}
			function cancelMomentumTracking(){
				cancelAnimationFrame(this.momentumID);
			}
			momentumLoop=()=>{
				this.slider.scrollLeft += this.velX;
				this.velX *= 0.95; 
				if (Math.abs(this.velX) > 0.5){
				  this.momentumID = requestAnimationFrame(momentumLoop);
				}
			}	
			console.log(this.slider.id)
			let self = this;
			$(".slider-control[target='#"+this.slider.id+"']").on('click',function(){
				var action = $(this).attr('action');
				// console.log(this);
				width = self.slider.offsetWidth;
				scroll = self.slider.scrollLeft;
				if(action=='prev'){
					p=(scroll-width)
				}else{
					p=(scroll+width)
				}

		    	p = (p/self.slider.offsetWidth).toFixed(0);
		    	p = parseInt(p);

				self.newP = p*self.slider.offsetWidth;
				self.scrollAnimate();
			})
			
		}
		sliders.forEach(function(s){
			slider = new sliderHandler(s);
		})
		setTimeout(function(){
			$('#loading').fadeOut();
		},500)

		$("#form-have-a-project").on("submit",function(e){
			e.preventDefault();
			$('body').css('cursor','wait');
			var form  = $('#form-have-a-project').serialize();
			$.post('{{url('have-a-project')}}',form)
			.done(function(data){
				$('body').css('cursor','unset');
				alert("Thanks! Our team will reach out to you shortly.");
				$("#form-have-a-project").find('input').val('');
			})
			.fail(function(data){
				$('body').css('cursor','unset');
				alert("Can't connect to our network, please try again.");

				// $("#form-have-a-project").find('input').val('');
			})
		
		})
		$("#form-subscribe").on("submit",function(e){
			e.preventDefault();
			$('body').css('cursor','wait');
			var form  = $('#form-subscribe').serialize();
			$.post('{{url('subscribe')}}',form)
			.done(function(data){
				$('body').css('cursor','unset');
				alert("Subscribed!");
				$("#form-subscribe").find('input').val('');
			})
			.fail(function(data){
				$('body').css('cursor','unset');
				alert("Can't connect to our network, please try again.");

				// $("#form-have-a-project").find('input').val('');
			})
		
		})
		  
	</script>
		
</body>
</html>