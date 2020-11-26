@extends('admin.layouts.default')
@section('content')

                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Birth Date</th>
										<th>Address</th>
										<th>Phone</th>
										<th>Email</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($patients as $patient)
									<tr>
										<td><!-- <img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle m-r-5" alt=""> --> {{$patient->name}}</td>
										<td>{{$patient->dob}}</td>
										<td>{{$patient->address}}</td>
										<td>{{$patient->phone}}</td>
										<td>{{$patient->email}}</td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="{{route('delete-patient',$patient->id)}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<div id="delete_patient" class="modal fade delete-modal" role="dialog">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-body text-center">
													<img src="assets/img/sent.png" alt="" width="50" height="46">
													<h3>Are you sure want to delete this Patient?</h3>
													<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
														<a type="submit" href="" class="btn btn-danger">Delete</a>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
                </div>
		

@endsection

@section('scripts')
	<script src="{{asset('ui/admin/assets/js/select2.min.js')}}"></script>
    <script src="{{asset('ui/admin/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('ui/admin/assets/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('ui/admin/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('ui/admin/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection