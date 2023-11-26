<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href={{ asset('favicon.ico')}} />
	<title>Mehedi Hasan Shuvon | Portfolio Website</title>
	  <!-- Fontawesome link -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	  <!-- Bootstrap link -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

	<link rel="stylesheet" href={{ asset('css/nav.css')}}>
	<link rel="stylesheet" href={{ asset('css/home.css')}}>
	<link rel="stylesheet" href={{ asset('css/loader.css')}}>
	 <link rel="stylesheet" href={{ asset('css/hero.css')}}>
	 <link rel="stylesheet" href={{ asset('css/skills.css')}}>
	 <link rel="stylesheet" href={{ asset('css/projects.css')}}>
	 <link rel="stylesheet" href={{ asset('css/about.css')}}>
	 <link rel="stylesheet" href={{ asset('css/cv.css')}}>
	 <link rel="stylesheet" href={{ asset('css/contact.css')}}>
	 <link rel="stylesheet" href={{ asset('css/footer.css')}}>
</head>
<body>


	@include('components.common.loader')

	@include('components.common.notification')
	
	@include('components.common.navbar')
	


	@yield('content')
		
	@include('components.common.footer')




	{{-- bootstrap js   --}}
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

	<script src="https://cdn.emailjs.com/dist/email.min.js"></script>


	<script>
		var serviceId = "{{ env('SERVICE_ID') }}";
		var templateId = "{{ env('TEMPLATE_ID') }}";
		var userId = "{{ env('USER_ID') }}";
		(function() {
		  emailjs.init(userId); 
		})();
	  </script>

	{{-- textAnimation js   --}}
    <script src="{{ asset('js/textAnimation.js') }}"></script>
	<script src="{{ asset('js/loader.js') }}"></script>
	<script src="{{ asset('js/nav.js') }}"></script>
	<script src="{{ asset('js/contact.js') }}"></script>
</body>
</html>