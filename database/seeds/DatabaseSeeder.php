<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserDatabaseSeeder::class);
        $this->call(RoleDatabaseSeeder::class);
        $this->call(CollegeDatabaseSeeder::class);
        $this->call(CoursesDatabaseSeeder::class);
        $this->call(GenderDatabaseSeeder::class);
        $this->call(CivilStatusDatabaseSeeder::class);
        $this->call(ShiftingStatusDatabaseSeeder::class);
    }
}
