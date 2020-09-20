<!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('public/backend/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('public/backend/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('public/backend/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/backend/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('public/backend/js/demo/datatables-demo.js')}}"></script>
  <script src="{{asset('public/backend/js/demo/chart-area-demo.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="{{asset('public/backend/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('public/backend/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('public/backend/js/demo/datatables-demo.js')}}"></script>

<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js')}}"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js
"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>


@if (Session::has('message'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal("{{ Session::get('message') }}","", "success");
        });
    </script>
@endif

@if (Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal("{{ Session::get('success') }}","", "success");
        });
    </script>
@endif

@if (Session::has('alert'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal("{{ Session::get('alert') }}","", "warning");
        });
    </script>
@endif
