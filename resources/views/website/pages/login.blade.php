@extends('website.layouts.default')
@section('content')
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title text-center">LOGIN</h2>
                    <form action="{{route('login-store')}}" method="post">
                        @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="passord" class="form-control" name="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-block btn-success">
                            </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection
