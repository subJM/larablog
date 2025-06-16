<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\UserStatus;
use App\UserType;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'username'=>'admin',
            'password'=>Hash::make('password'),
            'type'=>UserType::SuperAdmin,
            'status'=>UserStatus::Active,
        ]);
    }
}
