<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('title', 'Livewire blog app')</title>		
		<script src="{{ asset('js/app.js') }}" defer></script>
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		@livewireStyles
    </head>
    <body class="bg-gray-100">
		<div class="font-sans text-gray-900 antialiased">
			<div class="flex flex-col sm:justify-center items-center pt-5 pb-5">
				<h2 class="font-bold text-2xl">Livewire Country-City Demo</h2>
				<div class="w-full sm:max-w-xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-x">
				@yield('content')		
				</div>
			</div>
			
		</div>
		@livewireScripts
    </body>
</html>