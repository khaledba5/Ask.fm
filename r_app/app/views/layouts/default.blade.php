<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	{{ HTML::style('/css/main.css') }}
</head>
<body>
	<div id= "container">
		<div id = "header">
			{{ HTML::link('/', 'Ask Fm')}}
		</div>

		<div id="nav">
			<ul>
				<li>{{ HTML::link('/', 'Home') }}</li>
				<li>{{ HTML::link('/', 'Register') }}</li>
				<li>{{ HTML::link('/', 'Login') }}</li>
			</ul>
		</div>

		<div id="content">
			@if(Session::has('message'))
			<p id="message">{{ Session::get('message') }}</p>
			@endif

			@yield('content')
		</div>

		<div id="footer">
			$copy; Ask Fm {{ date('Y') }}
		</div>
	</div>
</body>

</html>