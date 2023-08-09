<?php

namespace Database\Seeders;

use App\Models\InnovationAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InnovationAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminList = [
            [
                'name' => 'Admin Inovasi',
                'email' => 'admin_inovasi@gmail.com',
                // 'username' => 'admin',
                'password' => Hash::make('admin'),
                'role' => 'admin-inovasi',
                // 'photo' => '1',
                'instance_name' => 'Instansi Terkait',
                // 'description' => '1',
            ],
            [
                'name' => 'Dinas Kelautan dan Perikanan',
                'email' => 'dinlaut@gmail.com',
                // 'username' => 'admin',
                'password' => Hash::make('laut'),
                'role' => 'admin-inovasi',
                // 'photo' => '1',
                'instance_name' => 'UPT Laboratorium Kesehatan Ikan dan Lingkungan- Dinas Kelautan dan Perikanan Provinsi Jawa Timur',
                // 'description' => '1',
            ],
            [
                'name' => 'Dinas Pendidikan Provinsi Jawa Timur',
                'email' => 'dispendikjatim@gmail.com',
                // 'username' => 'admin',
                'password' => Hash::make('disdik'),
                'role' => 'admin-inovasi',
                // 'photo' => '1',
                'instance_name' => 'Dinas Pendidikan Provinsi Jawa Timur',
                // 'description' => '1',
            ],
            [
                'name' => 'Badan Penelitian dan Pengembangan Provinsi Jawa Timur',
                'email' => 'badanpeneliti@gmail.com',
                // 'username' => 'admin',
                'password' => Hash::make('badanpeneliti'),
                'role' => 'admin-inovasi',
                // 'photo' => '1',
                'instance_name' => 'Badan Penelitian dan Pengembangan Provinsi Jawa Timur',
                // 'description' => '1',
            ],
            [
                'name' => 'Rumah Sakit Jiwa Provinsi Jawa Timur',
                'email' => 'rsj@gmail.com',
                // 'username' => 'admin',
                'password' => Hash::make('rsj'),
                'role' => 'admin-inovasi',
                // 'photo' => '1',
                'instance_name' => 'Rumah Sakit Jiwa Provinsi Jawa Timur',
                // 'description' => '1',
            ],
        ];

        foreach ($adminList as $key => $value) {
            $admin = new InnovationAdmin();

            $admin->fullname = $value['name'];
            $admin->instance_name = $value['instance_name'];
            $admin->photo = '';
            $admin->description = '';

            $admin->save();

            $admin->user()->create([
                'name' => $value['name'],
                'email' => $value['email'],
                // 'username' => 'siti',
                'password' => $value['password'],
                'role' => $value['role'],
            ]);
        }
    }
}
