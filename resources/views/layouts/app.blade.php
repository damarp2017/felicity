<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Felicity</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://db.onlinewebfonts.com/c/0b51833ff62e4af8acb5fd3e2bf59e97?family=SF+Pro+Display" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="/css/app.css">
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
	

</head>
<body>
	@yield('content')

	@include('layouts.__footer')

	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	@stack('scripts')
</body>
</html>