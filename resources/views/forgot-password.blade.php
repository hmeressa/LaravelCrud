@extends('layouts.main')
@section('content')
	<body class="account-page">
		<div class="main-wrapper">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
                                        @if (isset($success))
                                        <div class="alert alert-success">
                                             {{$success}}
                                        </div>
                                         @endif
                                         @if (isset($error))
                                        <div class="alert alert-danger">
                                             {{$error}}
                                       </div>
                                         @endif
											<h3>Forgot Password?</h3>
											<p class="small text-muted">Enter your email to get a password reset link</p>
										</div>
										<form action="/reset" method="POST">
                                            @csrf
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="firstname">
												<label class="focus-label">Email</label>
											</div>
                                            @error('firstname')
                                                <span class="alert alert-danger">{{$message}}</span>
                                            @enderror
											<div class="text-right">
												<a class="forgot-link" href="{{ url('/login') }}">Remember your password?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Reset Password</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</body>
    @endsection
