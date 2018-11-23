@extends('layout.master')

@section('header')

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-datepicker/css/datepicker.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>
  <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}" ></script>
@endsection
@section('title')
	DSA - Staff Student Listing
@endsection

@section('navbar')
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="{{\route('staff.user.dashboard')}}" class="logo"><b><span>MSU</span>SP</b></a>
  <!--logo end-->

  <div class="top-menu">
    <ul class="nav pull-right top-menu">
      <li>
        <form method="post" action="{{\route('staff.logout')}}">
          {{ csrf_field() }}
          <button type="submit" class="logout" >Logout</button>
        </form>
      </li>
    </ul>
  </div>
@endsection

@section('sidebar')
<ul class="sidebar-menu" id="nav-accordion">
  <p class="centered"><a href="profile.html"><img src="{{asset('img/msu.png')}}" class="img-circle"  height= "80" width="80"></a></p>
  <h5 class="centered">MSU-MAIN STAFF</h5>
  <li class="mt">
    <a class="active" href="{{\route('staff.user.dashboard')}}">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="sub-menu">
    <a href="javascript:;">
      <i class="fa fa-sitemap"></i>
      <span>Student</span>
      </a>
    <ul class="sub">
      <li><a href="{{\route('staff.student.general')}}">General Overview</a></li>
      <li><a href="{{\route('staff.student.request')}}">Student Request</a></li>
      <li><a href="">Upload Student Record</a></li>
    </ul>
  </li>
</ul>
@endsection
@section('content_header')
<div class="col-lg-12 main-chart">
  <div class="border-head">
    <h3>Student Data</h3>
  </div>
</div>
@endsection
@section('content')
<div class="row mt">
  <div class="col-lg-4">
    <section class="panel">
       <div class="panel-body">
        <h4 class="mb"><i class="fa fa-angle-right"></i>Upload Student Record:</h4>
        @include('staff::student.layouts.import-file')
        <hr>
        <h4 class="mb"><i class="fa fa-angle-right"></i>Student Batch Files:</h4>
        @include('staff::student.layouts.batch-datatables')
       </div>
    </section>


  </div>
  <div class="col-lg-8">
    @include('staff::student.layouts.datatables')
  </div>
</div>

@endsection

@section('scripts')

  <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>

  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('lib/advanced-form-components.js')}}"></script>
@endsection
