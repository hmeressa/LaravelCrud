@extends('layouts.main')
@section('content')
<body class="account-page">
		<div class="main-wrapper">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>Doccure</span></h3>
										</div>

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

										<form  method="POST" action="/auth">
                                            @csrf
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="firstname">
												<label class="focus-label">First Name</label>
											</div>
                                            @error('firstname')
                                                <span class="alert alert-danger">{{$message}}</span>
                                            @enderror
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="lastname">
												<label class="focus-label">Last Name</label>
											</div>
                                            @error('lastname')
                                                <span class="alert alert-danger">{{$message}}</span>
                                            @enderror
											<div class="text-right">
												<a class="forgot-link" href="{{ url('/forgot') }}">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
											<div class="text-center dont-have">Don’t have an account? <a href="{{url('/register')}}">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->

						</div>
					</div>

				</div>

			</div>
			@endsection
