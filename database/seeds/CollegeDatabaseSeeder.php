<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use App\Entities\Programs\College;

final class CollegeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
    	foreach ($this->getColleges() as $college) {
        	if(!College::where(['name' => $college['name']])->first()) {
        		College::create($college);
        	}
        }
    }

    private function getColleges() : array
    {
    	return [
    		[
    			'name'				=> 'COLLEGE OF AGRICULTURE',
    			'code'				=> 'COA',
	    		'slug'				=> 'collegeofagriculture'
    		],
    		[
    			'name'				=> 'COLLEGE OF BUSINESS ADMINISTRATION & ACCOUNTANCY',
    			'code'				=> 'CBAA',
	    		'slug'				=> 'collegeofbusinessadministrationandaccountancy'
    		],
    		[
    			'name'				=> 'COLLEGE OF EDUCATION',
    			'code'				=> 'COED',
	    		'slug'				=> 'collegeofeducation'
    		],
    		[
    			'name'				=> 'COLLEGE OF ENGINEERING',
    			'code'				=> 'COE',
	    		'slug'				=> 'collegeofengineering'
    		],
    		[
    			'name'				=> 'COLLEGE OF FISHERIES',
    			'code'				=> 'COF',
	    		'slug'				=> 'collegeoffisheries'
    		],
    		[
    			'name'				=> 'COLLEGE OF FORESTRY & ENVIRONMENT STUDIES',
    			'code'				=> 'CFES',
	    		'slug'				=> 'collegeofforestryandenvironmentstudies'
    		],
    		[
    			'name'				=> 'COLLEGE OF HEALTH SCIENCE',
    			'code'				=> 'COHS',
	    		'slug'				=> 'collegeofhealthsciences'
    		],
    		[
    			'name'				=> 'COLLEGE OF HOTEL & RESTAURANT MANAGEMENT',
    			'code'				=> 'CHRM',
	    		'slug'				=> 'collegeofhealthsciences'
    		],
    		[
    			'name'				=> 'COLLEGE OF INFORMATION TECHNOLOGY',
    			'code'				=> 'CIT',
	    		'slug'				=> 'collegeofinformationtechnology'
    		],
    		[
    			'name'				=> 'COLLEGE OF NATURAL SCIENCE & MATHEMATICS',
    			'code'				=> 'CNSM',
	    		'slug'				=> 'collegeofnaturalscienceandmathematics'
    		],
    		[
    			'name'				=> 'COLEGE OF PUBLIC AFFAIRS',
    			'code'				=> 'CPA',
	    		'slug'				=> 'collegeofpublicaffairs'
    		],
    		[
    			'name'				=> 'COLLEGE OF SOCIAL SCIENCE & HUMANITIES',
    			'code'				=> 'CSSH',
	    		'slug'				=> 'collegeofsocialscienceandhumanities'
    		],
    		[
    			'name'				=> 'COLLEGE OF SPORTS AND PHYSICAL EDUCATION AND RECREATION',
    			'code'				=> 'CSPEAR',
	    		'slug'				=> 'collegeofsportsandphysicaleducationandrecreation'
    		],
    		[
    			'name'				=> 'KING FAISAL CENTER FOR ISLAMIC, ARABIC AND ASIAN STUDIES',
    			'code'				=> 'KFCIAAS',
	    		'slug'				=> 'kingfaisalcenterforislamicarabicandasianstudies'
    		]
    	];
    }
}
