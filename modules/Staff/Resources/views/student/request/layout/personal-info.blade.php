<div class="row detailed">
 <div class="col-lg-12 detailed">
    <form role="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="">
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
        <label class="col-lg-4 control-label"> Avatar:</label>
        <div class="col-lg-6">
          <input type="file" class="file-control"  name="picture">
        </div>
      </div>
      <br>
        <div>
          <span class="help-block"> Gender:</span>
          <select class="form-control" name="gender_id">
            <option value="" disabled {{empty(\old('gender_id')) ? "selected" : ""}}>{{$student->gender->name}}</option>
            @if ($genders->isNotEmpty())
                @foreach ($genders as $gender)
                    <option value="{{$gender->id}}" {{!empty(\old('gender_id')) ? (\old('gender_id') == $gender->id ? "selected" : "") : ""}}>{{$gender->name}}</option>
                @endforeach
            @endif
          </select>
        </div>
        <div>
          <span class="help-block">Age:</span>
          <input class="form-control" type="text" placeholder="" name="middle_name" value="{{$student->age}}">
        </div>
        <div>
          <span class="help-block"> Civil Status:</span>
          <select class="form-control" name="civil_status_id">
            <option value="" disabled {{empty(\old('civil_status_id')) ? "selected" : ""}}>{{$student->civil_status->name}}</option>
            @if ($genders->isNotEmpty())
                @foreach ($civil_statuses as $civil_status)
                    <option value="{{$civil_status->id}}" {{!empty(\old('civil_status_id')) ? (\old('civil_status_id') == $civil_status->id ? "selected" : "") : ""}}>{{$civil_status->name}}</option>
                @endforeach
            @endif
          </select>
        </div>
        <div>
          <span class="help-block">Campus Address:</span>
          <input class="form-control" type="text" placeholder="" name="employee_id" value="{{$student->campus_address}}">
        </div>
        <div>
          <span class="help-block">Guardian Name:</span>
          <input class="form-control" type="text" placeholder="" name="employee_id" value="{{$student->guardian_name}}">
        </div>
        <div>
          <span class="help-block">Guardian Address:</span>
          <input class="form-control" type="text" placeholder="" name="employee_id" value="{{$student->guardian_address}}">
        </div>
        <div>
          <span class="help-block">Guardian Number:</span>
          <input class="form-control" type="text" placeholder="" name="employee_id" value="{{$student->guardian_number}}">
        </div>
        <div>
          <span class="help-block">Guardian Relationship:</span>
          <input class="form-control" type="text" placeholder="" name="employee_id" value="{{$student->guardian_relationship}}">
        </div>
        <br>
        <hr>
        <div style="text-align: center;">
          <button type="submit" class="btn btn-theme03 "><i class="fa fa-check"></i> Update Student Profile</button>
        </div>
    </form>
  </div>
</div>
