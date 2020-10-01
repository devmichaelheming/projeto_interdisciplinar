<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Register | QueenAdmin - Beautiful Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="QueenAdmin - Beautiful Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="{{ asset('templates/theme/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/ionicons.css" rel="stylesheet')}}" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/main.css' )}}" rel='stylesheet' type="text/css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet'
		type='text/css'>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="144x144"
		href="{{ asset('templates/theme/assets/ico/queenadmin-favicon144x144.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="114x114"
		href="{{ asset('templates/theme/assets/ico/queenadmin-favicon114x114.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="72x72"
		href="{{ asset('templates/theme/assets/ico/queenadmin-favicon72x72.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="57x57"
		href="{{ asset('templates/theme/assets/ico/queenadmin-favicon57x57.png')}}">
	<link rel="shortcut icon" href="{{ asset('templates/theme/assets/ico/favicon.ico')}}">
</head>

<body class="middle-content page-register">
	<div class="container-fluid">
		<div class="content-box-bordered register-box">
			<h1>Create an account</h1>
			<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
				@csrf
				<div class="form-group">
					<label for="name" class="control-label sr-only">Username</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-person"></i></span>
							<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="username" placeholder="Username">
							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="control-label sr-only">Email</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-email"></i></span>
							<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email" placeholder="Email">
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="phone" class="control-label sr-only">Telefone</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-email"></i></span>
							<input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus id="phone" placeholder="Telefone">
							@error('phone')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="control-label sr-only">Password</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-locked"></i></span>
							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"" id="password" placeholder="Password">
							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="password-confirm" class="control-label sr-only">Repeat Password</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-locked"></i></span>
							<input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Repeat Password">
						</div>
					</div>
				</div>
				{{-- <div class="form-group">
					<div class="col-sm-12">
						<label class="fancy-checkbox">
							<input type="checkbox">
							<span>Subscribe me to the newsletter</span>
						</label>
					</div>
					<div class="col-sm-12">
						<label class="fancy-checkbox">
							<input type="checkbox">
							<span>I accept the <a href="#" data-toggle="modal" data-target="#termsModal">Terms &amp;
									Agreement</a></span>
						</label>
					</div>
				</div> --}}
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-success btn-block"><i
								class="icon ion-checkmark-circled"></i> Create Account</button>
					</div>
				</div>
			</form>
			<p><em>Already have an account?</em> <a href="#"><strong>Login</strong></a></p>
		</div>
	</div>
	<!-- Javascript -->
	<script src="{{ asset('templates/theme/assets/js/jquery/jquery-2.1.0.min.js')}}"></script>
	<script src="{{ asset('templates/theme/assets/js/bootstrap/bootstrap.js')}}"></script>
	<script src="{{ asset('templates/theme/assets/js/queen-form-layouts.js')}}"></script>
</body>

</html>