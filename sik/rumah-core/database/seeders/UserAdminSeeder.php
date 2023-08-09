<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('email', 'admin@admin.com')->first())
        {
            return true;
        }

        User::firstOrCreate([
            'name' => 'Adminstrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);
    }
}
