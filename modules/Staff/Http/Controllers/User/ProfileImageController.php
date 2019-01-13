<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

final class ProfileImageController extends Controller
{
    public function __invoke()
    {
      // $file = $request->file('image');
      // $filename = Uuid::uuid4()->toString().'-'. str_slug(now(), '-').'.'.$file->getClientOriginalExtension();
      // $path = $file->storeAs('/', $filename, 'avatars');
      //
      // if ($employee->picture) {
      //     Storage::disk('avatars')->delete($employee->picture);
      // }
      // $employee->picture = $path;
      // $employee->save();
    }
}
