<script src="{{asset('ui/admin/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('ui/admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('ui/admin/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('ui/admin/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('ui/admin/assets/js/app.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Custom scripts for this template -->
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

     <script>
          @if(Session::has('messege'))
            var type="{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                     toastr.info("{{ Session::get('messege') }}");
                     break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                   toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
          @endif
       </script>

        <script>
           $(document).on("click", "#delete", function(e){
               e.preventDefault();
               var link = $(this).attr("href");
                  swal({
                    title: "Are you Want to delete?",
                    text: "Once Delete, This will be Permanently Delete!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                         window.location.href = link;
                    } else {
                      swal("Safe Data!");
                    }
                  });
              });
      </script>

      <script>
          initSample();
      </script>