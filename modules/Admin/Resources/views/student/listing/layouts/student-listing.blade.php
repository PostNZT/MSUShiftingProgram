<section class="panel">
  <div class="panel-body">
      <h4><i class="fa fa-angle-right"></i> Student Listing</h4>
      <hr>
    <table id="student-table" class="table table-striped table-advance table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th><i class=" fa fa-edit"></i> Student ID</th>
          <th><i class="fa fa-bullhorn"></i> First Name</th>
          <th class="hidden-phone"><i class="fa fa-question-circle"></i> Middle Name</th>
          <th><i class="fa fa-bookmark"></i> Last Name</th>
          <th><i class=" fa fa-edit">Current College</th>
          <th><i class=" fa fa-edit">Current Course</th>
          <th><i class=" fa fa-edit">Shifting College</th>
          <th><i class=" fa fa-edit">Shifting Course</th>
          <th><i class=" fa fa-edit">Times Shifted</th>
          <th><i class=" fa fa-edit">Shifting Status</th>
        </tr>
      </thead>
    </table>
  </div>
</section>

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
                  { "data": "id", "orderable": true, "searchable": true },
                  { "data": "student_id", "orderable": false, "searchable": true },
                  { "data": "first_name", "orderable": false, "searchable": true },
                  { "data": "middle_name", "orderable": false, "searchable": true },
                  { "data": "last_name", "orderable": true, "searchable": true },
                  { "data": "current_college", "orderable": false, "searchable": true },
                  { "data": "current_course", "orderable": false, "searchable": true },
                  { "data": "shifting_college", "orderable": false, "searchable": true },
                  { "data": "shifting_course", "orderable": false, "searchable": true },
                  { "data": "times_shifted", "orderable": false, "searchable": true },
                  { "data": "shifting_status", "orderable": false, "searchable": true }
              ],
              "ajax":{
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: "{{\route('admin.student.api.listing.datatable')}}"
              }
          });
          // click rows
          $('#student-table tbody').on('click', 'tr', function () {
              var data = table.row( this ).data();
              window.location.href = "/student/listing/"+ data['uuid'] +"/details";
          });
      });
  });
</script>
