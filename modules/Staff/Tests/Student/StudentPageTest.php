<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Student;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentPageTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

  /**
  *@test
  */
    public function shouldDisplayStudentPageSuccessfully() : void
    {
        //should change the function for the $picture in the page, which is the cause
        // $this->assertTrue(true);
        $this->actingAs($this->fakeStaff(), 'staff')
          ->get(\route('staff.student'))
          ->assertStatus(200);
    }
}
