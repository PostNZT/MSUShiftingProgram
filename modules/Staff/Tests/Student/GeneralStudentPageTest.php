<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Student;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class GeneralStudentPageTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
     * @test
     * @return void
     */
    public function shouldDisplayGeneralStudentPageSuccessfully() : void
    {
        $this->actingAs($this->fakeStaff(), 'staff')
        	->get(\route('staff.student.general'))
        	->assertStatus(200);
    }
}
