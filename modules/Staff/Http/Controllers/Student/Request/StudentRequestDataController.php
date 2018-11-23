<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

final class StudentRequestDataController extends Controller
{
    public function __invoke(Request $request) 
    {
        $data = $request->post();    
        dd($data);
    }
}
