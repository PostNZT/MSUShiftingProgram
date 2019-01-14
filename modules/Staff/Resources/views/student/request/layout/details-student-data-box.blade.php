<div class="panel-heading">
  <ul class="nav nav-tabs nav-justified">
    <li class="active">
      <a data-toggle="tab" href="#student-grades">Student Grades</a>
    </li>
    <li>
      <a data-toggle="tab" href="#student-status">Student Information</a>
    </li>
    <li>
      <a data-toggle="tab" href="#student-upload">Upload Grades</a>
    </li>
  </ul>
</div>
<!-- /panel-heading -->
<div class="panel-body">
  <div class="tab-content">
    <div id="student-grades" class="tab-pane active">
      <div class="row detailed">
        <div class=" detailed">
            <h4 class="mb">Transcript of Records</h4>
              @include('staff::student.request.layout.tor-listing')
        </div>
      </div>
    </div>
    <div id="student-status" class="tab-pane">
      <div class="row detailed">
        <div class="col-lg-8 col-lg-offset-2 detailed">
            <h4 class="mb">Personal Information</h4>
            @include('staff::student.request.layout.personal-info')
        </div>
      </div>
    </div>
    <div id="student-upload" class="tab-pane">
      <div class="row detailed">
        <div class="col-lg-8 col-lg-offset-2 centered">
            <h4 class="mb">Upload Grades</h4>
            <form class="form-inline"
                method="POST"
                action="{{\route('staff.student.request.details.upload-grades-information', $student)}}"
                enctype="multipart/form-data">
                @if ($errors->any())
                    <div class="alert alert-danger text-xs">
                        <ul>
                             @foreach ($errors->all() as $error)
                                <li class="text-sm">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Select CSV file to import</label>
                    <input type="file" class="form-control-file" name="grades_csv">
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-md" style="float:right;">Submit</button>
            </form>

        </div>
      </div>
    </div>
  </div>
  </div>
</div>
