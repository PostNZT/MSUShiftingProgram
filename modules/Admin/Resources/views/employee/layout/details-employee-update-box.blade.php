<div class="panel-heading">
  <ul class="nav nav-tabs nav-justified">
    <li class="active">
      <a data-toggle="tab" href="#personal-info">Personal Info</a>
    </li>
    <li>
      <a data-toggle="tab" href="#reset-password">Reset Password</a>
    </li>
  </ul>
</div>
<!-- /panel-heading -->
<div class="panel-body">
  <div class="tab-content">
    <div id="personal-info" class="tab-pane active">
      <div class="row detailed">
       <div class="col-lg-8 col-lg-offset-2 detailed">
          <h4 class="mb">Personal Information</h4>
          <form role="form" class="form-horizontal">
            <div class="form-group">
              <label class="col-lg-2 control-label"> Avatar</label>
              <div class="col-lg-6">
                <input type="file" id="exampleInputFile" class="file-pos">
              </div>
            </div>
             <div>
                <input class="form-control" type="text" placeholder="{{$employee->first_name}}" name="first_name" value="">
              </div>
              <br>
              <div>
                <input class="form-control" type="text" placeholder="{{$employee->middle_name}}" name="middle_name" value="">
              </div>
              <br>
              <div>
                <input class="form-control" type="text" placeholder="{{$employee->last_name}}" name="last_name" value="">
              </div>
              <br>
              <div>
                <input class="form-control" type="text" placeholder="{{$employee->employee_id}}" name="employee_id" value="">
              </div>
              <div>
                <span class="help-block">Birthdate:</span>
                <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" name="birthdate" value="{{$employee->birthdate}}">
              </div>
              <div>  
                <span class="help-block"> Role:</span>
                <select class="form-control" name="role_id">
                  <option value="" disabled {{empty(\old('role_id')) ? "selected" : ""}}>Select Role</option>
                  @if ($roles->isNotEmpty())
                      @foreach ($roles as $role)
                          <option value="{{$role->id}}" {{!empty(\old('role_id')) ? (\old('role_id') == $role->id ? "selected" : "") : ""}}>{{$role->name}}</option>
                      @endforeach
                  @endif
                </select>
              </div>
              <br>
              <hr>
              <div style="text-align: center;">
                <button type="submit" class="btn btn-theme03 "><i class="fa fa-check"></i> Update Profile</button>
              </div>
          </form>
        </div>
      </div>
    </div>
    <div id="reset-password" class="tab-pane">
      <div class="row detailed">
        <div class="col-lg-8 col-lg-offset-2 detailed">
        <h4 class="mb">Password Reset:</h4>
        <form role="form" class="form-horizontal">
          <div>
            <span class="help-block"> Reset Password:</span>
            <input class="form-control" type="text" placeholder="" name="first_name" value="">
          </div>
          <br>
          <div style="text-align: center;">
            <button type="submit" class="btn btn-theme03 "><i class="fa fa-check"></i> Reset</button>
          </div>
        </form>
      </div> 
      </div>  
    </div>
  </div>
</div>