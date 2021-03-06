<script src="{{ asset('ui/website/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('ui/website/js/popper.js') }}"></script>
<script src="{{ asset('ui/website/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('ui/website/js/stellar.js') }}"></script>
<script src="{{ asset('ui/website/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ asset('ui/website/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('ui/website/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('ui/website/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('ui/website/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('ui/website/vendors/counter-up/jquery.counterup.js') }}"></script>
<script src="{{ asset('ui/website/js/mail-script.js') }}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ asset('ui/website/js/gmaps.min.js') }}"></script>
<script src="{{ asset('ui/website/js/theme.js') }}"></script>
<script src="{{asset('ui/website/reg/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('ui/website/reg/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('ui/website/reg/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('ui/website/reg/vendor/datepicker/daterangepicker.js')}}"></script>
<script src="{{asset('ui/website/reg/js/global.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


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

