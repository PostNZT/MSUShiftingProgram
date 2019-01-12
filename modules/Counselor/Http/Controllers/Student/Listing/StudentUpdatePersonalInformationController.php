<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Http\Controllers\Student\Listing;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Entities\Student\Student;
use Illuminate\Routing\Controller;

final class StudentUpdatePersonalInformationController extends Controller
{
    public function __invoke(Student $student, Request $request)
    {
        $data = $request->post();
        unset($data['_token']);


        
    }
}
