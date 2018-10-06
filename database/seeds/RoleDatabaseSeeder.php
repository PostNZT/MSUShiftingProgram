<?php

declare(strict_types=1);

use App\Entities\Employee\Role;
use Illuminate\Database\Seeder;

class RoleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        foreach ($this->getRoles() as $role) {
        	if(!Role::where(['name' => $role['name']])->first()) {
        		Role::create($role);
        	}
        }
    }

    private function getRoles() : array
    {
    	return [
    		[
    			'name'				=> 'Counselor',
	    		'slug'				=> 'counselor',
	    		'is_authorize'		=> true
    		],
    		[
    			'name'				=> 'Staff',
	    		'slug'				=> 'staff',
	    		'is_authorize'		=> false	
    		]
    	];
    }
}
