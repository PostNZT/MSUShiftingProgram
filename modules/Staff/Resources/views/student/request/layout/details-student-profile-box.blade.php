<div style="text-align: center;">
   <div class="servicetitle">
      <div class="profile-pic">
        <p><img class="img-circle" src={{$employee->picture()}}></p>
      </div>
      <h4>{{$employee->fullName}}</h4>
      <h5>{{$employee->role->name}}</h5>
      <hr>
    </div>
</div>
 <hr>
 <div style="text-align: left;">
    <div class="form-group">
      <label class="control-label">Username:</label>
      <label class="control-label"><strong>{{$employee->username}}</strong></label>
      <br>
      <label class="control-label">Employee ID:</label>
      <label class="control-label"><strong>{{$employee->employee_id}}</strong></label>
      <br>
      <label class="control-label">Birthday:</label>
      <label class="control-label"><strong>{{$employee->birthdate}}</strong></label>
    </div>
 </div>