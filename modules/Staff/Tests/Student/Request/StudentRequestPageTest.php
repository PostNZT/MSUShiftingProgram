<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Student\Request;

use Tests\TestCase;

use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentRequestPageTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
     * @test
     */
    public function shouldDisplayStudentRequestPageSuccessfully() : void
    {
    	$this->actingAs($this->fakeStaff(), 'staff')
    	    ->get(\route('staff.student.request'))
    	    ->assertStatus(200);
    }
}
