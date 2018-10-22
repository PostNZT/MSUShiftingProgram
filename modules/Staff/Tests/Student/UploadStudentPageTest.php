<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Student;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UploadStudentPageTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
     * @test
     * @return void
     */
    public function shouldDisplayUploadStudentPageSuccessfully() : void
    {
        $this->actingAs($this->fakeStaff(), 'staff')
        	->get(\route('staff.student.upload'))
        	->assertStatus(200);
    }
}
