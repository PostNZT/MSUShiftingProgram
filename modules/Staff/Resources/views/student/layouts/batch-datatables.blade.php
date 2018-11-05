<section class="panel">
  <div class="panel-body">
  
    <table id="student-table" class="table table-striped table-advance table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th><i class="fa fa-bullhorn"></i> Batch Name</th>
          <th class="hidden-phone"><i class="fa fa-question-circle"></i>Date</th>
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
                  'pageLength'
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
                  { "data": "batch_name", "orderable": true, "searchable": true },
                  { "data": "date", "orderable": false, "searchable": true }
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
              window.location.href = "/student/"+ data['uuid'] +"/details";
          });
      });
  });
</script>
