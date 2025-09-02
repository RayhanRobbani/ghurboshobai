<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);

        $admin = User::create([
            'name' => 'Tonmoy Saha',
            'email' => 'tonmoysaha@ghurboshobai.com',
            'contact' => '09696221214',
            'password' => Hash::make('admin!@#$')
        ]);

        $admin->assignRole('admin');
    }
}
