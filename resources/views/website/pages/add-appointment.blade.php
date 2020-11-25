<!DOCTYPE html>
<html lang="en">

<!-- add-appointment24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('ui/admin')}}/assets/img/favicon.ico">
    <title>Add Appointment</title>
    <link rel="stylesheet" type="text/css" href="{{asset('ui/admin')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/admin')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/admin')}}/assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/admin')}}/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('ui/admin')}}/assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h4 class="page-title text-center">Add Appointment</h4>
                    </div>
                </div>

                        <form method="POST" action="{{ route('create-appointment') }}">
                            @csrf

                                <div class="col-md-8 offset-md-2">
                                    <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                </div>

                                <div class="col-md-8 offset-md-2">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select class="select" name="department_id" class="form-control" id="department">
                                            <option>Select</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                    <div class="form-group row">
                                        <div class="col-md-8 offset-md-2">
                                        <label>Doctor</label>
                                        <select class="select" name="doctor_id" class="form-control" id="doctor">
                                            <option value="">Select Doctor</option>                                        </select>
                                    </div>
                                </div>



                                    <div class="form-group row">
                                        <div class="col-md-8 offset-md-2">
                                        <label>Appointment Days</label>
                                        <select class="select" name="appointment_day" id="appoint_day">
                                            <option value="">Select Day</option>
                                        </select>
                                    </div>
                                </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-2">
                                    <label for="">Select Shift</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div id="morning_shift" class="form-check">
                                                <input class="form-check-input" name="shift" class="form-control" type="checkbox" value="1" id="defaultCheck1" >
                                                <label class="form-check-label" for="defaultCheck1">
                                                   Morning
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check" id="evening_shift">
                                              <input class="form-check-input" name="shift" class="form-control" type="checkbox" value="0" id="defaultCheck1">
                                              <label class="form-check-label" for="defaultCheck1">
                                                 Evening
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-2">
                                    <label class="display-block">Appointment Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_active" value="1" checked>
                                    <label class="form-check-label" for="product_active">
                                    Active
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_inactive" value="0">
                                    <label class="form-check-label" for="product_inactive">
                                    Inactive
                                    </label>
                                </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-2">
                                    <input type="submit" value="Create Appointment" class="btn btn-primary submit-btn" id="">
                                </div>
                            </div>

                        </form>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{asset('ui/admin')}}/assets/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('ui/admin')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('ui/admin')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('ui/admin')}}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{asset('ui/admin')}}/assets/js/select2.min.js"></script>
    <script src="{{asset('ui/admin')}}/assets/js/moment.min.js"></script>
    <script src="{{asset('ui/admin')}}/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{asset('ui/admin/assets/js/app.js')}}"></script>
    <script>
            $(document).ready(function(){
                $("#department").change(function(){
                    var dept_val = $("#department").val();
                    $.ajax({
                    url: "/api/find-doctor/"+dept_val,
                    dataType: 'json',
                    success: function(data){
                        $("#doctor").html('<option value="">Select</option>');
                        var len_doc = data.doctors.length;
                        for( i=0 ; i<len_doc ; i++){
                            var str = '<option value="'+ data.doctors[i].id +'"> '+ data.doctors[i].name +' </option>';
                            $("#doctor").append(str);
                        }
                    }
                });

            });

            $("#doctor").change(function(){
                var doc_id = $("#doctor").val();
                $.ajax({
                url: "/api/get-available_days/"+doc_id,
                dataType: 'json',
                success: function(data){
                    $("#appoint_day").html('<option value="">Select Day</option>');
                    var len_days = data.schedules.length;
                    console.log(data.schedules);
                    for(i=0;i<len_days;i++){
                        var str = '<option value="'+ data.schedules[i].id +'"> '+ data.schedules[i].available_days +' </option>';
                            $("#appoint_day").append(str);

                    }

                }
        });

    });


    $("#appoint_day").change(function(){
        var sch_id = $("#appoint_day").val();
        $.ajax({
            url: "/api/get-available-shift/"+sch_id,
            dataType: 'json',
            success: function(data){
                console.log(data);
                var morning_appointment = data.get_morning_appointment;
                var evening_appointment = data.get_evening_appointment;

                if(morning_appointment !=0){
                    $("#moring_shift").show();
                }else {
                    $("#morning_shift").hide();

                }
                if(evening_appointment !=0){
                    $("#evening_shift").show();
                }else{
                    $("#evening_shift").hide();
                }



            }
        });

    });




});
     </script>
</body>


<!-- add-appointment24:07-->
</html>
