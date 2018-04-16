<!DOCTYPE html>
<html lang="en-US">
<head>
    
    <title>Dashboad</title>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Signika:300,400,600,700" />
    <link rel="stylesheet" type="text/css" href="{{ url('/public/css/webfiles/_libs/font-awesome/css/font-awesome.css') }}" /> 
    <link rel="stylesheet" type="text/css" href="{{ url('/public/css/webfiles/_libs/no-ui-slider/jquery.nouislider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/public/css/webfiles/_libs/animate.css') }}" /> 
    <link rel="stylesheet" type="text/css" href="{{ url('/public/css/webfiles/_css/style.css') }}" /> 
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</head>
<body>

	<header>
    
        <div class="center">

            <div class="logo">
            
                <a href="{{ url('/dashboard') }}"><img src="{{ url('/public/css/webfiles/_img/logo.png') }}" alt="Insurance Agency" /></a>
            
            </div>
			<nav>
            
                <ul class="menu">
					@guest
					@else
						
					
						 
						 
						<li><a href="{{ url('/') }}">Ktheu tek faqja</a></li>
						<li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a href={{ url('/dashboard') }}>Dashboard</a></li>
						<li class="{{ request()->is('dashboard/contact') ? 'active' : '' }}"><a href="{{ url('/dashboard/contact') }}">Kontaktet</a></li>
						<li class="{{ request()->is('dashboard/housequote') ? 'active' : '' }}"><a href="{{ url('/dashboard/housequote') }}">House Quote</a></li>
						<li class="{{ request()->is('dashboard/lifequote') ? 'active' : '' }}"><a href="{{ url('/dashboard/lifequote') }}">Life Quote</a></li>
						<li class="{{ request()->is('dashboard/carquote') ? 'active' : '' }}"><a href="{{ url('/dashboard/carquote') }}">Car Quote</a></li>
						<li class="{{ request()->is('dashboard/travelquote') ? 'active' : '' }}"><a href="{{ url('/dashboard/travelquote') }}">Travel Quote</a></li>
					@endguest
                </ul>
                
                <div class="menu-responsive"><i class="fa fa-bars"></i></div>
            
            </nav>
			<div class="clear">
            </div>

        </div>

    </header>