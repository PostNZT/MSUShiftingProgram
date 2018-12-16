<?php

namespace MnkyDevTeam\Counselor\Http\Controllers\Student\Listing\Api;

use App\Entities\Student\Student;
use Illuminate\Routing\Controller;
use App\Traits\DataTable\DataTableTrait;
use Illuminate\Database\Eloquent\Collection;
use MnkyDevTeam\Counselor\Http\Resources\Student\StudentCollection;
use MnkyDevTeam\Counselor\Http\Resources\Student\Student as StudentResource;

class StudentResourceListingController extends Controller
{
    use DataTableTrait;

    public function listing() : Collection
     {
         $studentCollection = Collection::make(new StudentCollection(new StudentResource(
             Student::all()
         )));

         return $studentCollection;
     }

     public function datatable()
     {
        return $this->makeDataTable($this->listing());
     }
}
