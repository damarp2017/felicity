<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Felicity</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/css/app.css?new')}}">
	


</head>
<body>

<!-- <form> -->
	<div class="mx-4 md:app-container py-20 ">
		<h2 class="text-3xl text-center mb-5">Do you know the mantra?</h2>
		<form method="POST" action="{{url('/coming-soon')}}">
			@csrf
			<div class="w-full md:w-1/3 mx-auto">
				<input class="text--gray-dark font--gilroy-md w-full p-3 md:padding--form-we-have rounded-xl md:font--size-19 bg-gray-100 focus:outline-none mb-5" type="text" name="secret" value="" placeholder="Tell me">
				<button class="w-full py-3 md:font--size-21 font--gilroy-md text-white text-center rounded bg--blue" type="submit">Open</button>
			</div>
		</form>
	</div>
<!-- </form> -->
</body>
</html>