<table id="student-table" class="table table-striped table-advance table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th><i class="fa fa-bullhorn"></i>Semester</th>
      <th class="hidden-phone"><i class="fa fa-question-circle"></i> School Year</th>
      <th><i class="fa fa-bookmark"></i> Subject Code</th>
      <th><i class=" fa fa-edit">Section</th>
      <th><i class=" fa fa-edit">Description</th>
      <th><i class=" fa fa-edit">Grade</th>
    </tr>
  </thead>
</table>


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
                  url: ""
              }
          });
          // click rows
          $('#student-table tbody').on('click', 'tr', function () {
              var data = table.row( this ).data();
              window.location.href = "/student/request/"+ data['uuid'] +"/details";
          });
      });
  });
</script>
