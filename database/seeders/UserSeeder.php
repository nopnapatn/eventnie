<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
                // $user = new User();
                // $user->name = 'Admin';
                // $user->email = 'admin@gmail.com';
                // $user->email_verified_at = now();
                // $user->remember_token = "0000000000";
                // $user->password = '1234';
                // $user->phoneNumber = "000000000";
                // $user->studentID = '0000000000';
                // $user->faculty = 'Admin';
                // $user->year = 0;
                // $user->major = 'Admin';
                // $user->college_year = 0;
                // $user->is_admin = true;
                // $user->save();

                // $user = new User();
                // $user->name = 'User';
                // $user->email = 'user@ku.th';
                // $user->email_verified_at = now();
                // $user->remember_token = "1111111111";
                // $user->password = '1234';
                // $user->phoneNumber = "1111111111";
                // $user->studentID = '1111111111';
                // $user->faculty = 'User';
                // $user->year = 0;
                // $user->major = 'User';
                // $user->college_year = 0;
                // $user->is_admin = false;
                // $user->save();

                User::factory()
                        ->count(3)
                        ->create();
        }
}
