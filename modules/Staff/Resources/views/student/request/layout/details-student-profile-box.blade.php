<div style="text-align: center;">
  <div class="servicetitle">
     <div class="profile-pic">
       <p><img class="img-circle" src={{$student->picture()}}></p>
     </div>
     <h4>{{$student->fullName}}</h4>
     <hr>
   </div>
</div>
<hr>
<div style="text-align: left;">
   <div class="form-group">
       <label class="control-label">Employee ID:</label>
       <label class="control-label"><strong>{{$student->student_id}}</strong></label>
     <br>
       <label class="control-label">Contact Number:</label>
       <label class="control-label"><strong>{{$student->contact_no}}</strong></label>
     <br>
       <label class="control-label">Current College:</label>
       <label class="control-label"><strong>{{$student->old_college()->first()->code}}</strong></label>
     <br>
       <label class="control-label">Current College:</label>
       <label class="control-label"><strong>{{$student->old_course()->first()->name}}</strong></label>
     <br>
       <label class="control-label">Shifting College:</label>
       <label class="control-label"><strong>{{$student->new_college()->first()->code}}</strong></label>
     <br>
       <label class="control-label">Current Course:</label>
       <label class="control-label"><strong>{{$student->new_course()->first()->name}}</strong></label>
     <br>
       <label class="control-label">Number Of Times Shifted:</label>
       <label class="control-label"><strong>{{$student->number_times_shifted}}</strong></label>
     <br>
   </div>
</div>
