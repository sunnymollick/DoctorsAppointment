@extends('admin.layouts.default')
@section('content')

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Department</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="{{ route('create-department') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4 offset-sm-4">
                                <div style="margin-left: 40pt;">Upload an Avatar</div>
                                <div id="image_preview"></div>
                                <br>
                                <div class="form-group" style="">
                                    <input type="file" name="picture" id="picture" onchange="preview_image();">
                                </div>
                            </div>
                            
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
     <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() 
            { 
             $('form').ajaxForm(function() 
             {
              alert("Uploaded SuccessFully");
             }); 
            });

            function preview_image() 
            {
             var total_file=document.getElementById("picture").files.length;
             for(var i=0;i<total_file;i++)
             {
              $('#image_preview').append("<img style='margin-left: 40pt;height: 150px; width: 150px;' src='"+URL.createObjectURL(event.target.files[i])+"'><br>");
             }
            }
        </script>
@endsection
