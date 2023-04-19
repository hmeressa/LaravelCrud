@extends('layouts.main')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Register Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3>User Register</h3>
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
                            <!-- Register Form -->
                            <form method="POST" action="/create" >
                                @csrf
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="firstname">
                                    <label class="focus-label">FirstName</label>
                                </div>
                                @error('firstname')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="lastname">
                                    <label class="focus-label">LastName</label>
                                </div>
                                @error('lastname')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="username">
                                    <label class="focus-label">UserName</label>
                                </div>
                                @error('username')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror

                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="mobno">
                                    <label class="focus-label">Mobile No</label>
                                </div>
                                @error('mobno')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror

                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="address">
                                    <label class="focus-label">Address</label>
                                </div>
                                @error('address')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror
                                <div class="text-right">
                                    <a class="forgot-link" href="{{ url('/login') }}">Already have an account?</a>
                                </div>
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
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
                            </form>
                            <!-- /Register Form -->

                        </div>
                    </div>
                </div>
                <!-- /Register Content -->
            </div>
        </div>

    </div>
</div>
@endsection
