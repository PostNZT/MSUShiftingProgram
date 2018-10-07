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

@endsection
@section('title')
	MSUOVCAA - Employee Listing
@endsection
@section('sidebar')
<ul class="sidebar-menu" id="nav-accordion">
  <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
  <h5 class="centered">Jhune Carlo Trogelio</h5>
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
@section('content_header')
<div class="col-lg-12 main-chart">
  <div class="border-head">
    <h3>Employee Listing</h3>
  </div>
</div>
@endsection
@section('content')
<div class="row mt">
  <div class="col-lg-4">
    <section class="panel">
       <div class="panel-body">
        <h4 class="mb"><i class="fa fa-angle-right"></i> Create Employee:</h4>
        <form class="form-horizontal style-form" method="POST" action="{{\route('admin.employee.enlist')}}">
          {{ csrf_field() }}
          @if ($errors->any())
              <div class="alert alert-danger text-xs">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li class="text-sm">{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="form-group">
            <div class="col-sm-12">
              <div class="{{$errors->has('first_name') ? "has-error":''}}">
                <input class="form-control" type="text" placeholder="First Name" name="first_name" value="{{\old('first_name')}}">
              </div>
              <br>
              <div class="{{$errors->has('middle_name') ? "has-error":''}}">
                <input class="form-control" type="text" placeholder="Middle Name" name="middle_name" value="{{\old('middle_name')}}">
              </div>
              <br>
              <div class="{{$errors->has('last_name') ? "has-error":''}}">
                <input class="form-control" type="text" placeholder="Last Name" name="last_name" value="{{\old('last_name')}}">
              </div>
              <br>
              <div class="{{$errors->has('employee_id') ? "has-error":''}}">
                <input class="form-control" type="text" placeholder="Employee ID" name="employee_id" value="{{\old('employee_id')}}">
              </div>
              <div class="{{$errors->has('birthdate') ? "has-error":''}}">
                <span class="help-block">Birthdate:</span>
                <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" name="birthdate" value="<?php echo date("m/d/Y");?>">
              </div>
              <div class="{{$errors->has('role_id') ? "has-error":''}}">  
                <span class="help-block"> Role:</span>
                <select class="form-control" name="role_id">
                  <option value="" disabled {{empty(\old('role_id')) ? "selected" : ""}}>Select Role</option>
                  @if ($roles->isNotEmpty())
                      @foreach ($roles as $role)
                          <option value="{{$role->id}}" {{!empty(\old('role_id')) ? (\old('role_id') == $role->id ? "selected" : "") : ""}}>{{$role->name}}</option>
                      @endforeach
                  @endif
                </select>
              </div>
            </div>
          </div>
          <div style="text-align: right;">
             <button type="submit" class="btn btn-theme03 "><i class="fa fa-check"></i> Submit</button>
          </div>
        </form>
       </div>
    </section>
  </div>
  <div class="col-lg-8">
    <section class="panel">
      <div class="panel-body">
        <table class="table table-striped table-advance table-hover">
          <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
          <hr>
          <thead>
            <tr>
              <th><i class="fa fa-bullhorn"></i> First Name</th>
              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Middle Name</th>
              <th><i class="fa fa-bookmark"></i> Last Name</th>
              <th><i class=" fa fa-edit"></i> Employee ID</th>
              <th>Authentication Level</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a href="basic_table.html#">Company Ltd</a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>12000.00$ </td>
              <td><span class="label label-info label-mini">Due</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="basic_table.html#">
                  Dashio co
                  </a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>17900.00$ </td>
              <td><span class="label label-warning label-mini">Due</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="basic_table.html#">
                  Another Co
                  </a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>14400.00$ </td>
              <td><span class="label label-success label-mini">Paid</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="basic_table.html#">Dashio ext</a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>22000.50$ </td>
              <td><span class="label label-success label-mini">Paid</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <a href="basic_table.html#">Total Ltd</a>
              </td>
              <td class="hidden-phone">Lorem Ipsum dolor</td>
              <td>12120.00$ </td>
              <td><span class="label label-warning label-mini">Due</span></td>
              <td>
                <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>

@endsection

@section('scripts')
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

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