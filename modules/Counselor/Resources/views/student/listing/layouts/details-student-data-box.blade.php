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
        <div class="detailed">
            <h4 class="mb">Transcript of Records</h4>
            <table id="student-table" class="table table-striped table-advance table-hover">
              <thead>
                <tr>
                  <th>id</th>
                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> School Year</th>
                  <th><i class="fa fa-bullhorn"></i>Semester</th>
                  <th><i class="fa fa-bookmark"></i> Subject Code</th>
                  <th><i class=" fa fa-edit">Section</th>
                  <th><i class=" fa fa-edit">Description</th>
                  <th><i class=" fa fa-edit">Grade</th>
                  <th><i class=" fa fa-edit">Numbers Taken</th>
                </tr>
              </thead>
            </table>
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

<script>


  $(document).ready(function () {
      $(function() {
          var table = $('#student-table').DataTable({
              "dom": 'Bfrtip',
              "buttons": [
                  'pageLength', 'excel', 'pdf'
              ],
              "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]],
              "serverSide": true,
              "deferRender": true,
              "columnDefs": [
                  { targets: [0], visible: false},
              ],
              "autoWidth":false,
              "columns": [
                  { "data": "id", "orderable": false, "searchable": true },
                  { "data": "school_year", "orderable": true, "searchable": true },
                  { "data": "semester", "orderable": false, "searchable": true },
                  { "data": "subject_code", "orderable": false, "searchable": true },
                  { "data": "section", "orderable": true, "searchable": true },
                  { "data": "description", "orderable": false, "searchable": true },
                  { "data": "grade", "orderable": false, "searchable": true },
                  { "data": "numbers_taken", "orderable": false, "searchable": true }
              ],
              "ajax":{
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: "{{\route('counselor.student.details.api.listing.datatable', $student)}}"
              }
          });
      });
  });
</script>
