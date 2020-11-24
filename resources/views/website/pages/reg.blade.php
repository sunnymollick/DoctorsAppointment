@extends('website.layouts.default')
@section('content')
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                <div class="card-body">
                    <h2 class="title">Doctor Registration Info</h2>
                    <form action="{{ route('store-doctor')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" name="first_name" type="text">
                                    <span>{{ $errors->first('first_name') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control"  name="last_name" type="text">
                                    <span>{{ $errors->first('last_name') }}</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" name="email" type="email">
                                    <span>{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password">
                                    <span>{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" id="inputConfirmPassword" type="password" name="password_confirmation">
                                    <span>{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <div class="cal-icon">
                                        <input type="date" class="form-control datetimepicker" name="date_of_birth">
                                        <span>{{ $errors->first('date_of_birth') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group gender-select">
                                    <label class="gen-label">Gender:</label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="gender" value="male" class="form-check-input">Male
                                            
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="gender" value="female" class="form-check-input">Female
                                            
                                        </label>
                                    </div>
                                    <span>{{ $errors->first('gender') }}</span>
                                </div>
                            </div>

                            
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" class="form-control ">
                                            <span>{{ $errors->first('address') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <select name="department" id="" class="form-control">
                                            <option value="">Select department</option>
                                              @foreach($departments as $department)
                                                 <option value="{{ $department->id}}">{{ $department->name}}</option>
                                               @endforeach
                                            </select>
                                            <span>{{ $errors->first('department') }}</span>
                                        </div>
                                    </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input class="form-control" name="phone" type="number">
                                    <span>{{ $errors->first('phone') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="picture">Upload Picture</label>
                                    <div class="profile-upload">     
                                        <div>
                                            <input type="file" name="picture" id="picture">       
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="gen-label">Status:</label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="status" value="1" class="form-check-input">Active
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" name="status" value="0" class="form-check-input">Inactive
                                            
                                        </label>
                                    </div>
                                    <span>{{ $errors->first('status') }}</span>
                                </div>
                            </div>

                        </div>

                        <div class="m-t-20 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Registration As Doctor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="{{ asset('ui/admin') }}/assets/js/select2.min.js"></script>
<script src="{{ asset('ui/admin') }}/assets/js/moment.min.js"></script>
<script src="{{ asset('ui/admin') }}/assets/js/bootstrap-datetimepicker.min.js"></script>
@endsection
