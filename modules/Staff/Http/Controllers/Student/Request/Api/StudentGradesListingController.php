<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request\Api;

use Illuminate\Routing\Controller;
use App\Traits\DataTable\DataTableTrait;
use Illuminate\Database\Eloquent\Collection;
use App\Entities\Student\StudentGradeInformation;
use MnkyDevTeam\Staff\Http\Resources\Student\StudentGradesCollection;
use MnkyDevTeam\Staff\Http\Resources\Student\StudentGrades as StudentGradesResource;

final class StudentGradesListingController extends Controller
{
    use DataTableTrait;

    public function listing() : Collection
     {
         $studentGradesCollection = Collection::make(new StudentGradesCollection(new StudentGradesResource(
             StudentGradeInformation::all()
         )));

         return $studentGradesCollection;
     }

     public function datatable()
     {
        return $this->makeDataTable($this->listing());
     }
}
