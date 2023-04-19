@extends('layouts.main')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">List of Users</h3>
                </div>
            </div>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="table-responsive">
                            <table class="datatable table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Mobile No</th>
                                        <th>Address</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $datas as $data )
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->Firstname}}</td>
                                        <td>{{$data->Lastname}}</td>
                                        <td>{{$data->Username}}</td>
                                        <td>{{$data->Mobile}}</td>
                                        <td>{{$data->Address}}</td>
                <td><a href="/update/{{$data->id}}" class="btn btn-primary"> update</a></td>
                <td><a href="/delete/{{$data->id}}"class="btn btn-danger"> delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
