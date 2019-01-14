<div class="row detailed">
 <div class="col-lg-12 detailed">
   <form role="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{\route('admin.student.details.update-shifting-status', $student)}}">
     {{ csrf_field() }}
     {{ method_field('PATCH') }}
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
        <div>
          <span class="help-block"> Shifting Status:</span>
          <select class="form-control" name="shifting_status_id">
            <option value="" disabled {{empty(\old('shifting_status')) ? "selected" : ""}}>{{$student->shifting_status->name}}</option>
            @if ($shifting_statuses->isNotEmpty())
                @foreach ($shifting_statuses as $shifting_status)
                    <option value="{{$shifting_status->id}}" {{!empty(\old('shifting_status')) ? (\old('shifting_status') == $shifting_status->id ? "selected" : "") : ""}}>{{$shifting_status->name}}</option>
                @endforeach
            @endif
          </select>
        </div>
      </div>
      <hr>
      <div style="text-align: center;">
          <button type="submit" class="btn btn-theme03 "><i class="fa fa-check"></i> Update Shifting Status</button>

      </div>

   </form>
 </div>
</div>


<script type="text/javascript">
    function getShiftingStatusID() {
        var selectedShiftingStatus = document.getElementById($shifting_status->id);
        console.log(selectedShiftingStatus);
    }
</script>
