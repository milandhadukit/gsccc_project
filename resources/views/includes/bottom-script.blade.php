 <!-- Required Jquery -->
 <script type="text/javascript" src="{{ URL::asset('assets/js/jquery/jquery.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL::asset('assets/js/popper.js/popper.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
 <!-- jquery slimscroll js -->
 <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
 <!-- modernizr js -->
 <script type="text/javascript" src="{{ URL::asset('assets/js/modernizr/modernizr.js') }}"></script>
 <script type="text/javascript" src="{{ URL::asset('assets/js/modernizr/css-scrollbars.js') }}"></script>
 <!-- classie js -->
 <script type="text/javascript" src="{{ URL::asset('assets/js/classie/classie.js') }}"></script>
 <!-- Custom js -->
 <script type="text/javascript" src="{{ URL::asset('assets/js/script.js') }}"></script>
 <script src="{{ URL::asset('assets/js/pcoded.min.js') }}"></script>
 <script src="{{ URL::asset('assets/js/demo-12.js') }}"></script>
 <script src="{{ URL::asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

 <script>
     $(document).ready(function() {
         $('[data-toggle="tooltip"]').tooltip();
     });

     $(document).ready(function() {
         $('[data-toggle="popover"]').popover({
             html: true,
             content: function() {
                 return $('#primary-popover-content').html();
             }
         });
     });
 </script>