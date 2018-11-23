<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Tests\Student\Request;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class StudentRequestDataTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
    *@test
    */
    public function shouldReturnDataSuccessfully() : void
    {
      $this->markTestIncomplete('error 404');
      //this code must be finished first during the StaffFactoryHelper;
        // $this->actingAs($this->fakeStaff(), 'staff')
        //       ->
    }
}
