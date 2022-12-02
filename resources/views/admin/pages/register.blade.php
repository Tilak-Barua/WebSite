@extends('admin.layouts.default_reg')
@section('content')
<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>


                                    @if(Session::has('msg'))
                                     <div class="alert alert_success" role="alert">{{Session::get('msg')}}</div>
                                    @endif



                            <form class="user" action="{{ URL::to('/store_data') }}" method="post">
                            @csrf
                                <div class="form-group" >
                                    <div class="">
                                        <input type="text" class="form-control form-control-user" name="name" id="exampleFirstName"
                                            placeholder="Name">
                                    </div>
                                 
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="role" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Role">
                                    </div>
                                </div>

                                <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop