<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Log In Alt | QueenAdmin - Beautiful Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="QueenAdmin - Beautiful Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="{{ asset('templates/theme/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/main.css')}}" rel="stylesheet" type="text/css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon144x144.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon114x114.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon72x72.png')}}">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon57x57.png')}}">
	<link rel="shortcut icon" href="{{ asset('templates/theme/assets/ico/favicon.png')}}">
</head>

<body class="middle-content page-login-social">
	<div class="container-fluid">
		<div class="content-box-bordered login-box box-with-help">
			<div style="width:100%;display:flex;justify-content:center;">
				<img src="{{ asset('prj2.png') }}" alt="" srcset="">
			</div>
			<h1>Log in to your account</h1>
			<form class="form-horizontal validate-form" role="form"  action="{{ route('login') }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="inputEmail3b" class="control-label sr-only">Email</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-email"></i></span>
							<input type="email" class="form-control email @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="off" id="email" name="email" placeholder="Email">
							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3b" class="control-label sr-only">Password</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-locked"></i></span>
							<input type="password" class="form-control password @error('password') is-invalid @enderror" name="password" id="inputPassword3b" placeholder="Password">
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<label class="fancy-checkbox">
							<input type="checkbox">
							<span>Remember me</span>
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-7">
						<button type="submit" class="btn btn-success btn-block">Sign in</button>
					</div>
					<div class="col-md-5 text-right">
						<a href="#"><em>forgot password?</em></a>
					</div>
				</div>
			</form>
			<p><em>Don't have an account yet?</em> <a href="#"><strong>Sign Up</strong></a></p>
			<button type="button" class="btn btn-link btn-login-help"><i class="icon ion-help-circled"></i></button>
		</div>
		<div class="login-separator text-center"><span>or sign up with</span></div>
		<div class="text-center">
			<button type="button" class="btn btn-login-social btn-login-facebook"><span>Facebook</span></button>
			<button type="button" class="btn btn-login-social btn-login-twitter"><span>Twitter</span></button>
			<button type="button" class="btn btn-login-social btn-login-googleplus"><span>Google Plus</span></button>
		</div>
	</div>
	<!-- Javascript -->
	<script src="{{asset('templates/theme/assets/js/jquery/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('templates/theme/assets/js/bootstrap/bootstrap.js')}}"></script>
	<script src="{{asset('templates/theme/assets/js/queen-form-layouts.js')}}"></script>
</body>

</html>
