<section class="panel">
  <div class="panel-body">
      <h4><i class="fa fa-angle-right"></i> Student Listing</h4>
      <hr>
    <table id="employee-table" class="table table-striped table-advance table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th><i class="fa fa-bullhorn"></i> First Name</th>
          <th class="hidden-phone"><i class="fa fa-question-circle"></i> Middle Name</th>
          <th><i class="fa fa-bookmark"></i> Last Name</th>
          <th><i class=" fa fa-edit"></i> Student ID</th>
          <th><i class=" fa fa-edit">Status</th>
        </tr>
      </thead>
    </table>
  </div>
</section>

<script>


  $(document).ready(function () {
      $(function() {
          var table = $('#employee-table').DataTable({
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
                  { "data": "first_name", "orderable": true, "searchable": true },
                  { "data": "middle_name", "orderable": false, "searchable": true },
                  { "data": "last_name", "orderable": false, "searchable": true },
                  { "data": "employee_id", "orderable": false, "searchable": true },
                  { "data": "role_id", "orderable": false, "searchable": true },
              ],
              "ajax":{
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: "{{\route('admin.employee.listing.api.datatables')}}"
              }
          });
          // click rows
          $('#employee-table tbody').on('click', 'tr', function () {
              var data = table.row( this ).data();
              window.location.href = "/employee/"+ data['uuid'] +"/details";
          });
      });
  });
</script>
