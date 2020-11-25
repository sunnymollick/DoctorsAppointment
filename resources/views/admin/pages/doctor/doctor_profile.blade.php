@extends('admin.layouts.default')
@section('content')
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="{{asset($doctor->image)}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">{{ $doctor->name }}</h3>
                                            <small class="text-muted">{{ $department->name }}</small>
                                                <div class="staff-id">Employee ID : DR-{{ $doctor->id }}</div>
                                                <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                <span class="text"><a href="#">{{ $doctor->phone }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#">{{ $doctor->email }}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text">{{ $doctor->dob }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">{{ $doctor->address }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text">{{ $doctor->gender }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="profile-tabs">
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">Profile</a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Add Schedule</a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab">My Schedule</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <h2 class="text-center text-dark">Add Schedule</h2>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('create-schedule') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="doctor_id" value="{{ $doctor->id }}">
                                </div>
                                <div class="form-group">
                                <input type="hidden" name="department_id" value="{{ $doctor->department_id }}" class="form-control">
                                </div>
                                    <div class="form-group row">
                                       <div class="col-md-12">
                                            <label for="">Available Days</label>
                                        <select name="available_days[]" multiple id="appointment_days" class="form-control select">
                                            <option value="">Select Days</option>
                                            <option value="saturday">Saturday</option>
                                            <option value="sunday">Sunday</option>
                                            <option value="monday">Monday</option>
                                            <option value="thuesday">Tuesday</option>
                                            <option value="wednesday">Wednesday</option>
                                            <option value="thursday">Thursday</option>
                                            <option value="friday">Friday</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group row" id="dynamic_section">
                                    <div class="col-md-6">
                                        <input type="number" min="0" name="morning_shift" placeholder="# of patient for morning" class="form-control">
                                    </div>


                                    <div class="col-md-6">
                                        <input type="number" min="0" name="evening shift" id="" placeholder="# of patient for evening" class="form-control">
                                    </div>


                                </div>
                                        <div class="form-group">
                                            <label class="display-block">Appointment Status</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="1" name="status" id="product_active" value="option1" checked>
                                                <label class="form-check-label" for="product_active">
                                                Active
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="0" name="status" id="product_inactive" value="option2">
                                                <label class="form-check-label" for="product_inactive">
                                                Inactive
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Add Schedule" class="btn btn-primary">
                                        </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
					</div>
						<div class="tab-pane" id="bottom-tab2">
							<div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <h2 class="text-center text-dark">Add Schedule</h2>
                                    </div>
                                    <div class="card-body">
                                    <form action="{{ route('create-schedule') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="doctor_id" value="{{ $doctor->id }}">
                                            </div>
                                            <div class="form-group">
                                            <input type="hidden" name="department_id" value="{{ $doctor->department_id }}" class="form-control">
                                            </div>
                                                <div class="form-group row">
                                                   <div class="col-md-12">
                                                        <label for="">Available Days</label>
                                                    <select name="available_days[]" multiple id="appointment_days" class="form-control select">
                                                        <option value="">Select Days</option>
                                                        <option value="saturday">Saturday</option>
                                                        <option value="sunday">Sunday</option>
                                                        <option value="monday">Monday</option>
                                                        <option value="thuesday">Tuesday</option>
                                                        <option value="wednesday">Wednesday</option>
                                                        <option value="thursday">Thursday</option>
                                                        <option value="friday">Friday</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                <div class="form-group row" id="dynamic_section">
                                                <div class="col-md-6">
                                                    <input type="number" min="0" name="morning_shift" placeholder="# of patient for morning" class="form-control">
                                                </div>


                                                <div class="col-md-6">
                                                    <input type="number" min="0" name="evening shift" id="" placeholder="# of patient for evening" class="form-control">
                                                </div>


                                            </div>
                                                    <div class="form-group">
                                                        <label class="display-block">Appointment Status</label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" value="1" name="status" id="product_active" value="option1" checked>
                                                            <label class="form-check-label" for="product_active">
                                                            Active
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" value="0" name="status" id="product_inactive" value="option2">
                                                            <label class="form-check-label" for="product_inactive">
                                                            Inactive
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Add Schedule" class="btn btn-primary">
                                                    </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
						</div>
						<div class="tab-pane" id="bottom-tab3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="myTable" class="table table-border table-striped custom-table mb-0">
                                            <thead>
                                                <tr>

                                                    <th>Available Days</th>
                                                    <th>Morning Patient Number </th>
                                                    <th>Evening Patient Number </th>
                                                    <th>Status</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($schedules as $schedule)
                                                <tr>
                                                <td>{{ $schedule->available_days }}</td>
                                                <td>{{ $schedule->morning_shift }}</td>
                                                <td>{{ $schedule->evening_shift }}</td>
                                                    <td>
                                                        @if($schedule->status == 1)
                                                            <span class="custom-badge status-green">Active</span>
                                                        @else
                                                            <span class="custom-badge status-red">Inactive</span>
                                                        @endif
                                                    </td>

                                                    <td class="text-right">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="edit-schedule.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_schedule"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            </div>
                    <div id="delete_schedule" class="modal fade delete-modal" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <img src="assets/img/sent.png" alt="" width="50" height="46">
                                    <h3>Are you sure want to delete this Schedule?</h3>
                                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
						</div>
					</div>
			</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $("#dynamic_section").hide();
        $("#appointment_days").change(function(){
            var len_app = $("#appointment_days").val();
            if(len_app != ''){
                $("#dynamic_section").show();
            }else{
                $("#dynamic_section").hide();
            }
        });
    });
</script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
<script src="{{ asset('ui/admin') }}/assets/js/select2.min.js"></script>
<script src="{{ asset('ui/admin') }}/assets/js/moment.min.js"></script>
<script src="{{ asset('ui/admin') }}/assets/js/bootstrap-datetimepicker.min.js"></script>

@endsection
