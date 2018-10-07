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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/r-2.2.1/sc-1.4.3/datatables.min.css"/>
  <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
@endsection
@section('title')
	MSUOVCAA - Employee Listing
@endsection
@section('sidebar')
<ul class="sidebar-menu" id="nav-accordion">
  <p class="centered"><a href="profile.html"><img src="{{asset('img/msu.png')}}" class="img-circle"  height= "80" width="80"></a></p>
  <h5 class="centered">MSU-MAIN ADMIN</h5>
  <li class="mt">
    <a href="{{\route('admin.user.dashboard')}}">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li>
    <a class="active" href="{{\route('admin.employee')}}">
      <i class="fa fa-group"></i>
      <span>Employees </span>
    </a>
  </li>
  <li class="sub-menu">
    <a href="javascript:;">
      <i class="fa fa-sitemap"></i>
      <span>Students</span>
      </a>
    <ul class="sub">
      <li><a href="">General</a></li>
      <li><a href="">Buttons</a></li>
      <li><a href="">Panels</a></li>
      <li><a href="">Font Awesome</a></li>
    </ul>
  </li>
</ul>
@endsection

@section('content')
<div class="row mt">
  <div class="col-lg-12">
    <div class="row content-panel">
      <div class="col-md-2 profile-text mt mb centered">
        <div class="right-divider hidden-sm hidden-xs">
          <h4>1922</h4>
                  <h6>FOLLOWERS</h6>
                  <h4>290</h4>
                  <h6>FOLLOWING</h6>
                  <h4>$ 13,980</h4>
                  <h6>MONTHLY EARNINGS</h6>
        </div>
      </div>
      <!-- /col-md-4 -->
      <div class="col-md-6 profile-text">
        <h3>{{$employee->fullName}}</h3>
        <h6>{{$employee->role->name}}</h6>
       
      </div>
      <!-- /col-md-4 -->
      <div class="col-md-4 centered">
        <div class="profile-pic">
          <p><img src="img/ui-sam.jpg" class="img-circle"></p>
          
        </div>
      </div>
      <!-- /col-md-4 -->
    </div>
    <!-- /row -->
  </div>
  <div class="col-lg-12 mt">
    <div class="row content-panel">
      <div class="panel-heading">
        <ul class="nav nav-tabs nav-justified">
          <li class="active">
            <a data-toggle="tab" href="#overview">Overview</a>
          </li>
          <li>
            <a data-toggle="tab" href="#edit">Edit Profile</a>
          </li>
        </ul>
      </div>
      <!-- /panel-heading -->
      <div class="panel-body">
        <div class="tab-content">
          <div id="overview" class="tab-pane active">
            <div class="row">
              
              
            </div>
          </div>
          <div id="edit" class="tab-pane">
            <div class="row">
              

            </div>   
          </div>
        </div>
      </div>
    </div>
</div>

@endsection

@section('scripts')
  
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/r-2.2.1/sc-1.4.3/datatables.js"></script>

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
