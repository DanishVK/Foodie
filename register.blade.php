<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zebratheme.com/html/fooadmin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 11:30:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Foodmin : Widget</title>
	
	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon--> 
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon--> 
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
	
	<!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

	<div class="unix-login">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="login-content">
						<div class="login-logo">
							<a href="index-2.html"><span>Foodmin</span></a>
						</div>
						<div class="login-form">
							<h4>Register to Administration</h4>
							<form method="POST" action="{{ route('register') }}">
									@csrf
								<div class="form-group">
									<label>User Name</label>
									
											<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
			
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										
								</div>
								<div class="form-group">
									<label>Email address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-group">
									<label>Password</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								
								<div class="form-group">
										<label>Password</label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
	
							
									</div>

								<div class="checkbox">
									<label>
										<input type="checkbox"> Agree the terms and policy 
									</label>									
								</div>
								
								<button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
								
								<div class="register-link m-t-15 text-center">
									<p>Already have account ? <a href="#"> Sign in</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>


<!-- Mirrored from zebratheme.com/html/fooadmin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 11:30:31 GMT -->
</html>