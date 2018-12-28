<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use App\Entities\Misc\ShiftingStatus;

final class ShiftingStatusDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        foreach ($this->getShiftingStatuses() as $shiftingStatus) {
          if(!ShiftingStatus::where(['name' => $shiftingStatus['name']])->first()) {
            ShiftingStatus::create($shiftingStatus);
          }
        }
    }

    private function getShiftingStatuses() : array
    {
    	return [
      		[
      			   'name'				=> 'Approved'
      		],
      		[
      			   'name'				=> 'Disapproved'
      		],
          [
                'name'      => 'Not Yet Approved'
          ]
    	];
    }
}
