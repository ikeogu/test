<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NSF') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#669999;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'NSF') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                </div>
            </div>
        </nav> 
        <nav class="navbar navbar-expand-md navbar-inverse " style="background-color:#d1e0e0;">   
            <div id="Subheader" >
                <div class="container">
                    <div class="column one">
                        <h1 class="title">{{ date('Y') }} Annual Conference</h1>
                        <ul class="navbar-nav mr-auto">
                            <li>
                            <a href="#">Home</a> <span><i class="icon-right-open"></i></span></li>
                            <li><a href="#">2018 Annual Conference</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>		
		    </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer id="Footer" class="clearfix">
	
		
	

		
		<div class="footer_copy" style="background-color:#334d4d; padding: 50px;">
			<div class="container">
				<div class="column one">

					<a id="back_to_top" class="button button_left button_js" href=""><span class="button_icon"><i class="icon-up-open-big"></i></span></a>					
					<!-- Copyrights -->
					<div class="copyright">
					<center>	<h4 style="color:white"> © {{ date('Y') }} NSF. All Rights Reserved	</h4>	</center>			
					
											
				</div>
			</div>
		</div>
	
		
	
	
	
</footer>
</body>
</html>
