<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(User $user): void
    {
        $user->name         = 'Admin';
        $user->email        = 'admin@gmail.com';
        $user->password     = Hash::make('12345678');
        $user->role_id      = 3;
        $user->save();
    }
}
