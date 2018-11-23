<?php

declare(strict_types=1);
namespace MnkyDevTeam\Staff\Tests\Student\Upload;

use Tests\TestCase;
use Tests\Helpers\StaffFactoryHelper;
use Illuminate\Foundation\Testing\RefreshDatabase;

final class UploadStudentDataPageTest extends TestCase
{
    use RefreshDatabase;
    use StaffFactoryHelper;

    /**
    *@test
    */
    public function shouldDisplayUploadPageSuccessfully() : void
    {
        $this->actingAs($this->fakeStaff(), 'staff')
              ->get(\route('staff.student.upload'))
              ->assertStatus(200);
    }
}
