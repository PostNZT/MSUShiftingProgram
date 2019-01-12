<div class="panel-heading">
  <ul class="nav nav-tabs nav-justified">
    <li class="active">
      <a data-toggle="tab" href="#student-grades">Student Grades</a>
    </li>
    <li>
      <a data-toggle="tab" href="#student-info">Student Information</a>
    </li>
    <li>
      <a data-toggle="tab" href="#student-status">Student Status</a>
    </li>
  </ul>
</div>
<!-- /panel-heading -->
<div class="panel-body">
  <div class="tab-content">
    <div id="student-grades" class="tab-pane active">
      <div class="row detailed">
        <div class="col-lg-8 col-lg-offset-2 detailed">
            <h4 class="mb">Transcript of Records</h4>
            hilllllx
        </div>
      </div>
    </div>
    <div id="student-info" class="tab-pane">
      <div class="row detailed">
        <div class="col-lg-8 col-lg-offset-2 detailed">
            <h4 class="mb">Personal Information</h4>
            @include('counselor::student.listing.layouts.personal-info')
        </div>
      </div>
    </div>
    <div id="student-status" class="tab-pane">
      <div class="row detailed">
        <div class="col-lg-8 col-lg-offset-2 detailed">
            <h4 class="mb">Shifting Status</h4>
            @include('counselor::student.listing.layouts.update-status')
        </div>
      </div>
    </div>
  </div>
</div>
