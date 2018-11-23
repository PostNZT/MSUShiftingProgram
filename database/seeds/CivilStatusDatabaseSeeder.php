<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use App\Entities\Misc\CivilStatus;

final class CivilStatusDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        foreach ($this->getCivilStatuses() as $civilstatus) {
        	if(!CivilStatus::where(['name' => $civilstatus['name']])->first()) {
        		CivilStatus::create($civilstatus);
        	}
        }
    }

    private function getCivilStatuses() : array
    {
    	return [
    		[
    			'name'				=> 'Single'
    		],
    		[
    			'name'				=> 'Married'
    		],
    		[
    			'name'				=> 'Separated'
    		],
    		[
    			'name'				=> 'Widow'
    		],
    		[
    			'name'				=> 'Divorced'
    		],
    		[
    			'name'				=> 'Annuled'
    		],
			[
    			'name'				=> 'Widower'
    		],
    		[
    			'name'				=> 'Single Parent'
    		]
    	];
    }
}