<?php

namespace Database\Seeders;

use App\Models\Innovator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InnovatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $innovatorList = [
            [
                'name' => 'Siti Andriati',
                'email' => 'siti@gmail.com',
                // 'username' => 'siti',
                'password' => Hash::make('siti'),
                'role' => 'innovator',
                // 'photo' => '1',
                // 'instance_name' => '1',
                // 'description' => '1',
            ],
            [
                'name' => 'Sunarto',
                'email' => 'sunarto@gmail.com',
                // 'username' => 'sunarto',
                'password' => Hash::make('sunarto'),
                'role' => 'innovator',
                // 'photo' => '1',
                // 'instance_name' => '1',
                // 'description' => '1',
            ],
            [
                'name' => 'Firdaus',
                'email' => 'firdaus@gmail.com',
                // 'username' => 'sunarto',
                'password' => Hash::make('firdaus'),
                'role' => 'innovator',
                // 'photo' => '1',
                // 'instance_name' => '1',
                // 'description' => '1',
            ],
            [
                'name' => 'Anny',
                'email' => 'anny@gmail.com',
                // 'username' => 'sunarto',
                'password' => Hash::make('anny'),
                'role' => 'innovator',
                // 'photo' => '1',
                // 'instance_name' => '1',
                // 'description' => '1',
            ],
            [
                'name' => 'Rimba',
                'email' => 'rimba@gmail.com',
                // 'username' => 'sunarto',
                'password' => Hash::make('rimba'),
                'role' => 'innovator',
                // 'photo' => '1',
                // 'instance_name' => '1',
                // 'description' => '1',
            ],
            [
                'name' => 'Shodikin',
                'email' => 'shodikin@gmail.com',
                // 'username' => 'sunarto',
                'password' => Hash::make('shodikin'),
                'role' => 'innovator',
                // 'photo' => '1',
                // 'instance_name' => '1',
                // 'description' => '1',
            ],
        ];

        foreach ($innovatorList as $key => $value) {
            $innovator = new Innovator();

            $innovator->fullname = $value['name'];
            $innovator->instance_name = '';
            $innovator->photo = '';
            $innovator->description = '';

            $innovator->save();

            $innovator->user()->create([
                'name' => $value['name'],
                'email' => $value['email'],
                // 'username' => 'siti',
                'password' => $value['password'],
                'role' => $value['role'],
            ]);
        }
    }
}
