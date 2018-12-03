<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Student\Listing;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentListingPageTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
     * @test
     */
    public function shouldDisplayStudentPageTest() : void
    {
        $this->actingAs($this->fakeStaff(), 'staff')
                ->get(\route('staff.student.listing'))
                ->assertStatus(200);
    }
}
