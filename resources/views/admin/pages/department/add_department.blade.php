@extends('admin.layouts.default')
@section('content')

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Department</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="{{ route('create-department') }}" method="POST">
                            @csrf
							<div class="form-group">
								<label>Department Name</label>
								<input class="form-control" type="text" name="name">
							</div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="4" class="form-control" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Department Status</label>
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
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Create Department</button>
                            </div>
                        </form>
                    </div>
                </div>

@endsection

@section('scripts')
     <script src="assets/js/select2.min.js"></script>
@endsection