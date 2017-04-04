<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
		@section('meta')
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@show

		<title>Martin Shaw - @yield('title')</title>

		<script src="js/app.js"></script>
		<link rel="stylesheet" href="css/app.css">
		@yield('assets')

	</head>
	<body>
		<div class="container">
			<div class="left_pane">
           		@yield('content')
			</div>
			<div class="right_pane">
				<div class="rp_contents">
					
					<div class="rp_title">Martin Shaw</div>
					<div class="rp_tagline">Web Developer &amp; Software Programmer</div>

					@section('sidebar')
					@show

					<div class="rp_bottom">
						@yield('hint')
						<div class="rpb_socialcv">
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
							<div class="rpbs_cv">
								<button class="border">Curriculum Vitae</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</body>
</html>
