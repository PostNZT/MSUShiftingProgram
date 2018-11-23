<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use App\Entities\Programs\Course;

final class CoursesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        foreach ($this->getCourses() as $course) {
        	if(!Course::where(['name' => $course['name']])->first()) {
        		Course::create($course);
        	}
        }
    }

    private function getCourses() : array
    {
    	return [
    		[
    			'name'						=> 'BS Agricultural Business',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BS Agricultural Business Management',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BS Agricultural Education',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BS Agricultural Extension',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BS Agricultural Engineering',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BSA Animal Husbandry',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BSA Animal Science (Animal Nutrition)',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BSA Animal Science (Animal Production)',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BSA Animal Science (Animal Production, Breeding & Physiology)',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BSA Animal Science (Animal Products & By-Products Processing)',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BSA Agronomy',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BSA Farming Systems',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BSA Horticulture',
	    		'college_id'				=> '1'
    		],
    		[
    			'name'						=> 'BS Accountancy',
	    		'college_id'				=> '2'
    		],
    		[
    			'name'						=> 'BSBA Accounting',
	    		'college_id'				=> '2'
    		],
    		[
    			'name'						=> 'Bachelor in Accounting Technology',
	    		'college_id'				=> '2'
    		],
    		[
    			'name'						=> 'BS Business Economics',
	    		'college_id'				=> '2'
    		],
    		[
    			'name'						=> 'BSBA Business Economics',
	    		'college_id'				=> '2'
    		],
    		[
    			'name'						=> 'BSBA Economics',
	    		'college_id'				=> '2'
    		],
    		[
    			'name'						=> 'BSBA Management',
	    		'college_id'				=> '2'
    		],
    		[
    			'name'						=> 'BSBA Entrepreneurial Marketing',
	    		'college_id'				=> '2'
    		],
    		[
    			'name'						=> 'BSBA Marketing',
	    		'college_id'				=> '2'
    		],
    		[
    			'name'						=> 'BEEd Early Childhood Education & Development (ECED)',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BEEd English',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BEEd Filipino',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BEEd General Education',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BEEd Islamic Studies',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BEEd Mathematics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BEEd Pre-School Education',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BEEd Reading',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BEEd Reading Education',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BEEd in Islamic Studies and Arabic Language',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BS Elementary Education',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEEd English',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEEd Filipino',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEEd Home Economics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE major in Home Economics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd Home Economics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE major in Home Economics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd Home Economics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd Technology and Livelihood Education',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'AB-BSE English',
	    		'college_id'				=> '3'
    		],
			[
    			'name'						=> 'BS-BSE Mathematics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BS-BSEd Biology',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE Biology',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE Chemistry',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE Filipino',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE History',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE Library Science',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE Mathematics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE Physical Education',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSE Physics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSESE',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd Biology',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd Chemistry',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd English',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd Filipino',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd History',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd Library Science',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd Mathematics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSEd Physics',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BSHE Home Arts',
	    		'college_id'				=> '3'
    		],
    		[
    			'name'						=> 'BS Chemical Engineering',
	    		'college_id'				=> '4'
    		],
    		[
    			'name'						=> 'BS Civil Engineering',
	    		'college_id'				=> '4'
    		],
    		[
    			'name'						=> 'BS Electrical Engineering',
	    		'college_id'				=> '4'
    		],
    		[
    			'name'						=> 'BS Electronics and Communication Engineering',
	    		'college_id'				=> '4'
    		],
    		[
    			'name'						=> 'BS Mechanical Engineering',
	    		'college_id'				=> '4'
    		],
    		[
    			'name'						=> 'BS Fisheries',
	    		'college_id'				=> '5'
    		],
    		[
    			'name'						=> 'BSF Aquaculture',
	    		'college_id'				=> '5'
    		],
    		[
    			'name'						=> 'BSF Inland Fisheries',
	    		'college_id'				=> '5'
    		],
    		[
    			'name'						=> 'Bachelor of Science in Fisheries (Aquaculture Ladderized Curriculum)',
	    		'college_id'				=> '5'
    		],
    		[
    			'name'						=> 'Bachelor of Science in Fisheries (Food Processing Ladderized Curriculum)',
	    		'college_id'				=> '5'
    		],
    		[
    			'name'						=> 'BS Environmental Science',
	    		'college_id'				=> '6'
    		],
    		[
    			'name'						=> 'BS Forestry',
	    		'college_id'				=> '6'
    		],
    		[
    			'name'						=> 'BSF Agro-forestry',
	    		'college_id'				=> '6'
    		],
    		[
    			'name'						=> 'BS Nursing',
	    		'college_id'				=> '7'
    		],
    		[
    			'name'						=> 'BS Eco Tourism',
	    		'college_id'				=> '8'
    		],
    		[
    			'name'						=> 'BS Hotel and Restaurant Management',
	    		'college_id'				=> '8'
    		],
    		[
    			'name'						=> 'BS Computer Science (Software Engineering)',
	    		'college_id'				=> '9'
    		],
    		[
    			'name'						=> 'BS Computer Science (Foundation)',
	    		'college_id'				=> '9'
    		],
    		[
    			'name'						=> 'BS Information Technology (Database Systems)',
	    		'college_id'				=> '9'
    		],
    		[
    			'name'						=> 'BS Information Technology (Multimedia Systems)',
	    		'college_id'				=> '9'
    		],
    		[
    			'name'						=> 'BS Information Technology (Network Systems)',
	    		'college_id'				=> '9'
    		],
    		[
    			'name'						=> 'BS Biology',
	    		'college_id'				=> '10'
    		],
    		[
    			'name'						=> 'BS Biology (Pre-Med)',
	    		'college_id'				=> '10'
    		],
    		[
    			'name'						=> 'BS Botany',
	    		'college_id'				=> '10'
    		],
    		[
    			'name'						=> 'BS Zoology',
	    		'college_id'				=> '10'
    		],
    		[
    			'name'						=> 'BS Chemistry',
	    		'college_id'				=> '10'
    		],
    		[
    			'name'						=> 'BS Mathematics',
	    		'college_id'				=> '10'
    		],
    		[
    			'name'						=> 'BS Statistics',
	    		'college_id'				=> '10'
    		],
    		[
    			'name'						=> 'BS Physics',
	    		'college_id'				=> '10'
    		],
    		[
    			'name'						=> 'BS Community Development',
	    		'college_id'				=> '11'
    		],
    		[
    			'name'						=> 'BS Public Administration (Local Regional Government Adm)',
	    		'college_id'				=> '11'
    		],
    		[
    			'name'						=> 'BS Public Administration (Public Fiscal Administration)',
	    		'college_id'				=> '11'
    		],
    		[
    			'name'						=> 'BS Public Administration (Public Policy & Program Administration)',
	    		'college_id'				=> '11'
    		],
    		[
    			'name'						=> 'BS Social Work',
	    		'college_id'				=> '11'
    		],
    		[
    			'name'						=> 'AB Communication Studies major in Devt. Com.',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'AB Communication Studies major in Journalism',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'AB Communication Studies major in SCTA',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'AB English',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'AB Filipino',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'AB History',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'BS Library Science',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'Bachelor of Library & Information Science',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'Bachelor of Library Science',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'AB Philosophy',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'AB Political Science',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'AB Psychology',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'BS Psychology',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'AB Sociology',
	    		'college_id'				=> '12'
    		],
    		[
    			'name'						=> 'BS Physical Education',
	    		'college_id'				=> '13'
    		],
    		[
    			'name'						=> 'BS International Relations',
	    		'college_id'				=> '14'
    		],
    		[
    			'name'						=> 'AB Islamic Studies major in Shariah',
	    		'college_id'				=> '14'
    		],
    		[
    			'name'						=> 'AB Shariah major Islamic Laws & Jurisprudence',
	    		'college_id'				=> '14'
    		],
    		[
    			'name'						=> 'BS Teaching Arabic',
	    		'college_id'				=> '14'
    		]
    	];
    }
}
