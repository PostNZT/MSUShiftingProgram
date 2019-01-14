<?php

namespace MnkyDevTeam\Admin\Http\Controllers\Student\Api;

use Illuminate\Routing\Controller;
use App\Traits\DataTable\DataTableTrait;
use Illuminate\Database\Eloquent\Collection;
use App\Entities\Student\Student;
use App\Entities\Student\StudentGradeInformation;
use MnkyDevTeam\Admin\Http\Resources\Student\StudentGradesCollection;
use MnkyDevTeam\Admin\Http\Resources\Student\StudentGrades as StudentGradesResource;

class StudentAdminGradesListingController extends Controller
{
    use DataTableTrait;

    public function listing(Student $student) : Collection
     {

         $studentGradesCollection = Collection::make(new StudentGradesCollection(new StudentGradesResource(
             StudentGradeInformation::where(['student_id' => $student->student_id])->get()
         )));

         return $studentGradesCollection;
     }

     public function datatable(Student $student)
     {
        return $this->makeDataTable($this->listing($student));
     }
}
