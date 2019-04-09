@extends('layouts.default')
@section('content')
    <div class="container h-100" id="login">
        <div class="row h-100 justify-content-md-center align-items-center">
            <div class="col-sm-auto">
                <div class="title text-center">
                    <h3 class="header">Login</h3>
                </div>
                <form name="login_form" id="login_form" action="/login" method="post" role="form">

                    <div class="form-group d-flex flex-column align-items-center">
                        @if ( Session::get('message') != '' )
                            <div class='alert alert-danger'>
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        {{ csrf_field() }}
                        <div class="card text-center">
                            <div class="card-body">
                                <h6 class="card-title text-uppercase">Email / Mobile Number</h6>
                                <div class="w-50 m-auto">
                                    <input type="text" name="email" class="form-control input-decor-primary"
                                           placeholder=""/>
                                </div>
                            </div>
                        </div>

                        <div class="card text-center">
                            <div class="card-body">
                                <h6 class="card-title text-uppercase">Password</h6>
                                <div class="w-50 m-auto">
                                    <input type="password" name="password" class="form-control input-decor-primary"
                                           placeholder="********"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="default-btn-group d-flex flex-column w-100">
                        <button type="submit" class="btn btn-secondary default-btn flat-btn">Login</button>
                        <a href="{{ route('getForgot') }}" id="register-btn" class="btn btn-link">Forgot your
                            password?</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
@stop