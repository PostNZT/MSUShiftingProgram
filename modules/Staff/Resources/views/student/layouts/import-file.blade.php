<form class="form-inline"
    method="POST"
    action=""
    enctype="multipart/form-data" style="text-align: center;">
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
        <label for="studentUploadDataoadData">Select CSV file to import</label>
        <input type="file" class="form-control-file" id="studentUploadDataoadData" name="student_csv">
    </div>

  <div style="text-align: right;">
     <button type="submit" class="btn btn-theme03 "><i class="fa fa-check"></i> Submit</button>
  </div>
</form>