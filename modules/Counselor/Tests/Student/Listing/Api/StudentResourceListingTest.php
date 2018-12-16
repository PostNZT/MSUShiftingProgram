<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Tests\Student\Listing\Api;

use Tests\TestCase;
use Tests\Helpers\CounselorFactoryHelper;
use Illuminate\Database\Eloquent\Collection;
use App\Entities\Student\Student;
use MnkyDevTeam\Counselor\Http\Resources\Student\StudentCollection;
use MnkyDevTeam\Counselor\Http\Resources\Student\Student as StudentResource;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentResourceListingTest extends TestCase
{
    use RefreshDatabase;
    use CounselorFactoryHelper;

    /**
    * @test
    */
    public function shouldDisplayStudentResourcesSuccessfully() : void
    {
        $studentCollection = Collection::make(new StudentCollection(new StudentResource(
            Student::all()
        )));

        $this->actingAs($this->fakeCounselor(), 'counselor')
            ->get(\route('counselor.student.api.listing'))
            ->assertStatus(200);
    }
}
