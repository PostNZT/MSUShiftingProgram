@extends('layout.master')
@section('header')

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{asset('lib/chart-master/Chart.js')}}"></script>

@endsection
@section('title')
	DSA Dashboard
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
    <a href="{{\route('staff.user.dashboard')}}">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="sub-menu">
    <a class="active" href="javascript:;">
      <i class="fa fa-sitemap"></i>
      <span>Student</span>
      </a>
    <ul class="sub">
      <li><a href="{{\route('staff.student.general')}}">General Overview</a></li>
      <li><a href="{{\route('staff.student.request')}}">Student Request</a></li>
      <li><a href="{{\route('staff.student.upload')}}">Upload Student Record</a></li>
      <li><a href="{{\route('staff.student.listing')}}">Student List</a></li>
    </ul>
  </li>
</ul>
@endsection
@section('content')
<div class="row mt">
  <div class="col-lg-2">

  </div>
  <div class="col-lg-8">
    <section class="panel">
       <div class="panel-body">
          <section class="panel">
           <div class="panel-body">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Create Student Record:</h4>
            <form class="form-horizontal style-form" method="POST" action="{{\route('staff.student.request.enlist')}}">
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
                    <span class="help-block"> First Name:</span>
                    <input class="form-control" type="text" placeholder="First Name" name="first_name" value="{{\old('first_name')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('middle_name') ? "has-error":''}}">
                    <span class="help-block"> MIddle Name:</span>
                    <input class="form-control" type="text" placeholder="Middle Name" name="middle_name" value="{{\old('middle_name')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('last_name') ? "has-error":''}}">
                    <span class="help-block"> Last Name:</span>
                    <input class="form-control" type="text" placeholder="Last Name" name="last_name" value="{{\old('last_name')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('student_id') ? "has-error":''}}">
                    <span class="help-block"> Student ID:</span>
                    <input class="form-control" type="text" placeholder="Student ID" name="student_id" value="{{\old('student_id')}}">
                  </div>
                  <div class="{{$errors->has('gender_id') ? "has-error":''}}">
                    <span class="help-block"> Gender:</span>
                    <select class="form-control" name="gender_id">
                      <option value="" disabled {{empty(\old('gender_id')) ? "selected" : ""}}>Select Gender</option>
                      @if ($genders->isNotEmpty())
                          @foreach ($genders as $gender)
                              <option value="{{$gender->id}}" {{!empty(\old('gender_id')) ? (\old('gender_id') == $gender->id ? "selected" : "") : ""}}>{{$gender->name}}</option>
                          @endforeach
                      @endif
                    </select>
                  </div>
                  <br>
                  <div class="{{$errors->has('age') ? "has-error":''}}">
                    <span class="help-block"> Age:</span>
                    <input class="form-control" type="text" placeholder="Age" name="age" value="{{\old('age')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('civil_status_id') ? "has-error":''}}">
                    <span class="help-block"> Civil Status:</span>
                    <select class="form-control" name="civil_status_id">
                      <option value="" disabled {{empty(\old('civil_status_id')) ? "selected" : ""}}>Select Civil Status</option>
                      @if ($civil_statuses->isNotEmpty())
                          @foreach ($civil_statuses as $civil_status)
                              <option value="{{$civil_status->id}}" {{!empty(\old('civil_status_id')) ? (\old('civil_status_id') == $civil_status->id ? "selected" : "") : ""}}>{{$civil_status->name}}</option>
                          @endforeach
                      @endif
                    </select>
                  </div>
                  <br>
                  <div>
                    <span class="help-block"> Present Program:</span>
                    <div class="{{$errors->has('old_college_id') ? "has-error":''}}">
                        <select class="form-control" name="old_college_id">
                          <option value="" disabled {{empty(\old('old_college_id')) ? "selected" : ""}}>Select College/Department</option>
                          @if ($colleges->isNotEmpty())
                              @foreach ($colleges as $college)
                                  <option value="{{$college->id}}" {{!empty(\old('old_college_id')) ? (\old('old_college_id') == $college->id ? "selected" : "") : ""}}>{{$college->name}}</option>
                              @endforeach
                          @endif
                        </select>
                    </div>
                    <br>
                    <div class="{{$errors->has('old_course_id') ? "has-error":''}}">
                      <select class="form-control" name="old_course_id">
                        <option value="" disabled {{empty(\old('old_course_id')) ? "selected" : ""}}>Select Course/Program</option>
                        @if ($courses->isNotEmpty())
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}" {{!empty(\old('old_course_id')) ? (\old('old_course_id') == $course->id ? "selected" : "") : ""}}>{{$course->name}}</option>
                            @endforeach
                        @endif
                      </select>
                    </div>
                  </div>
                  <br>
                  <div>
                    <span class="help-block"> Shifting To:</span>
                    <div class="{{$errors->has('new_college_id') ? "has-error":''}}">
                        <select class="form-control" name="new_college_id">
                          <option value="" disabled {{empty(\old('new_college_id')) ? "selected" : ""}}>Select College/Department</option>
                          @if ($colleges->isNotEmpty())
                              @foreach ($colleges as $college)
                                  <option value="{{$college->id}}" {{!empty(\old('new_college_id')) ? (\old('new_college_id') == $college->id ? "selected" : "") : ""}}>{{$college->name}}</option>
                              @endforeach
                          @endif
                        </select>
                    </div>
                    <br>
                    <div class="{{$errors->has('new_course_id') ? "has-error":''}}">
                        <select class="form-control" name="new_course_id">
                          <option value="" disabled {{empty(\old('new_course_id')) ? "selected" : ""}}>Select Course/Program</option>
                          @if ($courses->isNotEmpty())
                              @foreach ($courses as $course)
                                  <option value="{{$course->id}}" {{!empty(\old('new_course_id')) ? (\old('new_course_id') == $course->id ? "selected" : "") : ""}}>{{$course->name}}</option>
                              @endforeach
                          @endif
                        </select>
                    </div>
                  </div>
                  <br>
                  <div class="{{$errors->has('year_level') ? "has-error":''}}">
                    <span class="help-block"> Year Level:</span>
                    <select class="form-control" name="year_level">
                      <option value="" disabled {{empty(\old('year_level')) ? "selected" : ""}}>Select Year Level</option>
                      @if ($courses->isNotEmpty())
                          @foreach (array(1,2,3,4,5) as $value)
                              <option value="{{$value}}" {{!empty(\old('year_level')) ? (\old('year_level') == $value ? "selected" : "") : ""}}>{{$value}}</option>
                          @endforeach
                      @endif
                    </select>
                  </div>
                  <br>
                  <div class="{{$errors->has('contact_no') ? "has-error":''}}">
                    <span class="help-block"> Contact No:</span>
                    <input class="form-control" type="text" placeholder="Contact Number" name="contact_no" value="{{\old('contact_no')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('campus_address') ? "has-error":''}}">
                    <span class="help-block"> Campus Address:</span>
                    <input class="form-control" type="text" placeholder="Campus Address" name="campus_address" value="{{\old('campus_address')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('guardian_name') ? "has-error":''}}">
                    <span class="help-block"> Guardian Name:</span>
                    <input class="form-control" type="text" placeholder="Guardian Name" name="guardian_name" value="{{\old('guardian_name')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('guardian_address') ? "has-error":''}}">
                    <span class="help-block"> Guardian Address:</span>
                    <input class="form-control" type="text" placeholder="Guardian Address" name="guardian_address" value="{{\old('guardian_address')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('guardian_number') ? "has-error":''}}">
                    <span class="help-block"> Guardian Number:</span>
                    <input class="form-control" type="text" placeholder="Guardian Number" name="guardian_number" value="{{\old('guardian_number')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('guardian_relationship') ? "has-error":''}}">
                    <span class="help-block"> Relationship to Guardian:</span>
                    <input class="form-control" type="text" placeholder="Relationship to Guardian" name="guardian_relationship" value="{{\old('guardian_relationship')}}">
                  </div>
                  <br>
                  <div class="{{$errors->has('number_times_shifted') ? "has-error":''}}">
                    <span class="help-block"> Number of Times Shifted:</span>
                    <select class="form-control" name="number_times_shifted">
                      <option value="" disabled {{empty(\old('number_times_shifted')) ? "selected" : ""}}>Select Number Of Times Shifted</option>
                      @if ($courses->isNotEmpty())
                          @foreach (array(1,2,3,4,5) as $tvalue)
                              <option value="{{$tvalue}}" {{!empty(\old('number_times_shifted')) ? (\old('number_times_shifted') == $tvalue ? "selected" : "") : ""}}>{{$tvalue}}</option>
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
    </section>
  </div>
  <div class="col-lg-2">
  </div>
</div>
@endsection

@section('scripts')
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('lib/jquery.sparkline.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/gritter-conf.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('lib/sparkline-chart.js')}}"></script>
  <script src="{{asset('lib/zabuto_calendar.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to MSUOVCAA Shifting Program!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>

@endsection
