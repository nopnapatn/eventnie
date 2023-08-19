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
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@ku.th';
        $user->password = '1234';
        $user->studentID = '0000000000';
        $user->faculty = 'Admin';
        $user->year = 0;
        $user->major = 'Admin';
        $user->college_year = 0;
        $user->is_admin = true;

        User::factory()
            ->count(3)
            ->create();
    }
}
