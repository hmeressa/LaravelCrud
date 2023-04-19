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
                                <h3>User Update</h3>
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
                            <form action="/update" method="POST">
                                @csrf

                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="firstname"
                                    value="@foreach ($update_data as $update ) {{ $update->Firstname}}@endforeach">
                                    <label class="focus-label">First Name</label>
                                </div>

                                @error('firstname')
                                <span class="alert alert-danger">{{$message}}</span>
                                @enderror

                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="lastname"
                                    value="@foreach ($update_data as $update ) {{ $update->Lastname}}@endforeach">
                                    <label class="focus-label">Last Name</label>
                                </div>

                                @error('lastname')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror

                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="username"
                                    value="@foreach ($update_data as $update ) {{ $update->Username}}@endforeach">
                                    <label class="focus-label">User Name</label>
                                </div>
                                @error('username')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror

                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="mobno"
                                    value="@foreach ($update_data as $update ) {{ $update->Username}}@endforeach">
                                    <label class="focus-label">Mobile No</label>
                                </div>
                                @error('mobno')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror

                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" name="address"
                                    value="@foreach ($update_data as $update ) {{ $update->Address}}@endforeach">
                                    <label class="focus-label">Address</label>
                                </div>
                                @error('address')
                                    <span class="alert alert-danger">{{$message}}</span>
                                @enderror
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Update User</button>
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
