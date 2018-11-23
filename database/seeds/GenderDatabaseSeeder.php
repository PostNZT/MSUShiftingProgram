<?php

declare(strict_types=1);

use App\Entities\Misc\Gender;
use Illuminate\Database\Seeder;

final class GenderDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
    	foreach ($this->getGenders() as $gender) {
        	if(!Gender::where(['name' => $gender['name']])->first()) {
        		Gender::create($gender);
        	}
        }
    }

    private function getGenders() : array
    {
    	return [
    		[
    			'name'				=> 'Male',
	    		'slug'				=> 'male'
    		],
    		[
    			'name'				=> 'Female',
	    		'slug'				=> 'female'
    		]
    	];
    }
}
