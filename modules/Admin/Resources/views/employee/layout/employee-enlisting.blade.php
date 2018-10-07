<section class="panel">
   <div class="panel-body">
    <h4 class="mb"><i class="fa fa-angle-right"></i> Create Employee:</h4>
    <form class="form-horizontal style-form" method="POST" action="{{\route('admin.employee.enlist')}}">
      {{ csrf_field() }}
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
        <div class="col-sm-12">
          <div class="{{$errors->has('first_name') ? "has-error":''}}">
            <input class="form-control" type="text" placeholder="First Name" name="first_name" value="{{\old('first_name')}}">
          </div>
          <br>
          <div class="{{$errors->has('middle_name') ? "has-error":''}}">
            <input class="form-control" type="text" placeholder="Middle Name" name="middle_name" value="{{\old('middle_name')}}">
          </div>
          <br>
          <div class="{{$errors->has('last_name') ? "has-error":''}}">
            <input class="form-control" type="text" placeholder="Last Name" name="last_name" value="{{\old('last_name')}}">
          </div>
          <br>
          <div class="{{$errors->has('employee_id') ? "has-error":''}}">
            <input class="form-control" type="text" placeholder="Employee ID" name="employee_id" value="{{\old('employee_id')}}">
          </div>
          <div class="{{$errors->has('birthdate') ? "has-error":''}}">
            <span class="help-block">Birthdate:</span>
            <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" name="birthdate" value="<?php echo date("m/d/Y");?>">
          </div>
          <div class="{{$errors->has('role_id') ? "has-error":''}}">  
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
        </div>
      </div>
      <div style="text-align: right;">
         <button type="submit" class="btn btn-theme03 "><i class="fa fa-check"></i> Submit</button>
      </div>
    </form>
   </div>
</section>

