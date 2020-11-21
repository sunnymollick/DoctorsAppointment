@extends('website.layouts.default')
@section('content')
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="" method="post">
                        @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input name="first_name" class="form-control" placeholder="Enter First Name" required="" type="text">
                                </div>
                                <div class="col-md-6">
                                    <input name="last_name" class="form-control" placeholder="Enter Last Name" required="" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input name="email" class="form-control" placeholder="Enter Email" required="" type="email">
                                </div>
                                <div class="col-md-6">
                                    <input name="password" class="form-control" placeholder="Enter Password" required="" type="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <select name="department" class="form-control">
                                        <option value="">Choose Department</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input name="address" class="form-control" placeholder="Enter Address" required="" type="text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input name="hospital" class="form-control" placeholder="Enter Your Hospital" required="" type="text">
                                </div>
                                <div class="col-md-6">
                                    <input name="phone" class="form-control" placeholder="Enter Phone Number" required="" type="number">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" value="Registration" class="btn btn-block btn-primary">
                            </div>




                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection
