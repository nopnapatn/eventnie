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
                User::factory()
                        ->count(3)
                        ->create();

                // user
                $user = new User();
                $user->name = 'user';
                $user->email = 'user@ku.th';
                $user->email_verified_at = now();
                $user->password = 'password';
                $user->remember_token = '0000000000';
                $user->studentID = '0000000000';
                $user->faculty = '';
                $user->major = '';
                $user->college_year = 1;
                $user->phoneNumber = '0000000000';
                $user->allergic_food = '';
                $user->bio = '';
                $user->profile_picture = fake()->image('public/storage/', 800, 600, null, false);
                $user->is_admin = false;
                $user->can_create_event = false;
                $user->save();

                // user_create_event
                $user = new User();
                $user->name = 'user_create_event@ku.th';
                $user->email = 'user_create_event@ku.th';
                $user->email_verified_at = now();
                $user->password = 'password';
                $user->remember_token = '1111111111';
                $user->studentID = '1111111111';
                $user->faculty = '';
                $user->major = '';
                $user->college_year = 1;
                $user->phoneNumber = '1111111111';
                $user->allergic_food = '';
                $user->bio = '';
                $user->profile_picture = fake()->image('public/storage/', 800, 600, null, false);
                $user->is_admin = false;
                $user->can_create_event = true;
                $user->save();

                // user_staff
                $user = new User();
                $user->name = 'user_staff';
                $user->email = 'user_staff@ku.th';
                $user->email_verified_at = now();
                $user->password = 'password';
                $user->remember_token = '2222222222';
                $user->studentID = '2222222222';
                $user->faculty = '';
                $user->major = '';
                $user->college_year = 1;
                $user->phoneNumber = '2222222222';
                $user->allergic_food = '';
                $user->bio = '';
                $user->profile_picture = fake()->image('public/storage/', 800, 600, null, false);
                $user->is_admin = false;
                $user->can_create_event = false;
                $user->save();

                // admin
                $user = new User();
                $user->name = 'admin';
                $user->email = 'admin@ku.th';
                $user->email_verified_at = now();
                $user->password = 'password';
                $user->remember_token = '3333333333';
                $user->studentID = '3333333333';
                $user->faculty = '';
                $user->major = '';
                $user->college_year = 1;
                $user->phoneNumber = '3333333333';
                $user->allergic_food = '';
                $user->bio = '';
                $user->profile_picture = fake()->image('public/storage/', 800, 600, null, false);
                $user->is_admin = true;
                $user->can_create_event = false;
                $user->save();
        }
}
