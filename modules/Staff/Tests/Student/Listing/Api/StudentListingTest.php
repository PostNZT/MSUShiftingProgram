<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Student\Listing\Api;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Database\Eloquent\Collection;
use App\Entities\Student\Student;
use MnkyDevTeam\Staff\Http\Resources\Student\StudentCollection;
use MnkyDevTeam\Staff\Http\Resources\Student\Student as StudentResource;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentListingTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
     * @test
     */
    public function shouldDisplayStudentListing() : void
    {
        $studentCollection = Collection::make(new StudentCollection(new StudentResource(
            Student::all()
        )));

        $this->actingAs($this->fakeStaff(), 'staff')
            ->get(\route('staff.student.api.listing'))
            ->assertStatus(200);
    }
}
