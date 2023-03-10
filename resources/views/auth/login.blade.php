<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('backend/img/icons/icon-48x48.png') }}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Sign In | AdminKit Demo</title>

	<link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome back</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="{{ asset('backend/img/avatars/logo1.jpg') }}" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div>

                                    <form class="login" method="POST" action="{{ route('login') }}" >
                                        @csrf
										<div class="mb-3">
											<label class="form-label">Email</label>

                                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

										</div>

										<div class="mb-3">
											<label class="form-label">Password</label>

                                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Passwort">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            {{-- <small>
                                                <a href="index.html">Forgot password?</a>
                                            </small> --}}

                                            <small>
                                                <a href="{{ url('register') }}">Creer un compte</a>
                                            </small>

										</div>
										<div>
											<label class="form-check">
                                            <input class="form-check-input" type="checkbox" value="remember-me" name="remember" checked>
                                            <span class="form-check-label">
                                                {{ __('Remember Me') }}
                                            </span>
                                            </label>
										</div>
										<div class="text-center mt-3">
											{{-- <a href="" class="btn btn-lg btn-primary">Sign in</a> --}}
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{ asset('backend/js/app.js') }}"></script>

</body>
</html>
