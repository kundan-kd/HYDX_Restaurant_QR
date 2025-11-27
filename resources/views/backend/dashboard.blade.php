@extends('backend.layouts.main')
@section('title',' Dashboard')
@section('main-container')
 <div class="page-body">
    <div class="container-fluid">        
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-12 p-0"> 
            <h3>Dashboard </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
  
    <!-- Container-fluid end-->
  </div>
@endsection
@section('extra-js')
<script>
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  const getDashboardChart = "{{route('backend.dashboardChart')}}";
</script>
  <script src="{{asset('backend/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
  <script src="{{asset('backend/assets/js/chart/apex-chart/moment.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/custom/dashboard.js')}}"></script>
@endsection