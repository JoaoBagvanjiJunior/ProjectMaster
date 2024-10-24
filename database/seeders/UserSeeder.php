<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'gender' => 'M',
            'birthday' => Carbon::now()->format('Y-m-d'),
            'phone' => '847185821',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 4,
            'gpfcdocente_id' => 1,
        ]);
    }
}
