<!DOCTYPE html>
<html lang="en">
	<head>
		<title>URL Shortener</title>
		<link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
	</head>
	<body>
		<div id="container">
			@if(Session::has('errors'))
			<h3 class="error">{{$errors->first('link')}}</h3>
			@endif
			<h2>Uber-Shortener</h2>
			{{Form::open(array('url'=>'/', 'method'=>'post'))}}

			{{Form::text('link',Input::old('link'),
					array('placeholder'=>
						'Insert your URL here and press enter!'))}}
			{{Form::close()}}
		</div>
	</body>
</html>