<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;
use App\Entities\User\User;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        foreach ($this->getUsers() as $user) {
            if (!User::where(['username' => $user['username']])->first()) {
                $admin = User::create($user);
            }
        }
    }

    private function getUsers() : array
    {
        return [
            [
                'username' => 'msu.admin',
                'password' => \bcrypt('msu.admin'),
                'first_name' => 'MSU',
                'middle_name' => 'System',
                'last_name' => 'Admin',
                'remember_token' => \str_random(100),
                'api_token'     => \str_random(100)
            ]
        ];
    }
}
