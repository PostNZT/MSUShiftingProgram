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
                  { "data": "id", "orderable": false, "searchable": true },
                  { "data": "semester", "orderable": false, "searchable": true },
                  { "data": "school_year", "orderable": true, "searchable": true },
                  { "data": "subject_code", "orderable": false, "searchable": true },
                  { "data": "section", "orderable": true, "searchable": true },
                  { "data": "description", "orderable": false, "searchable": true },
                  { "data": "grade", "orderable": false, "searchable": true }
              ],
              "ajax":{
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: "{{\route('staff.student.details.api.listing.datatable')}}"
              }
          });
      });
  });
</script>
