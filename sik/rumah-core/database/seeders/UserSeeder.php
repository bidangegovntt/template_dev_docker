<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Faker\Factory as FakerFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();
        $superAdminRoleName = (new User)->getSuperAdminRoleName();

        Role::create(['name' => $superAdminRoleName]);
        Role::create(['name' => 'dokter inovasi']);
        Role::create(['name' => 'inovator']);
        Role::create(['name' => 'admin inovasi']);
        Role::create(['name' => 'publik']);

        $users = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('admin'),
                'roles' => [$superAdminRoleName],
                'instance_name' => $faker->domainWord(),
                'description' => '<p>' . implode('</p><p>', $faker->paragraphs(10)) . '</p>',
                'photo' => '',
            ],

            // dokter inovasi
            [
                'name' => 'A. Faizin Karimi',
                'email' => 'faizin@gmail.com',
                'password' => Hash::make('faizin'),
                'roles' => ['dokter inovasi'],
                'instance_name' => 'Peneliti, Penulis, Konsultan Kreatif dan Pengembangan Media',
                'description' => '<p>Lahir di Gresik, 26 April 1986 pria yang akrab dipanggil Faizin ini memulai kariernya sebagai seorang penjamin mutu bidang pendidikan dan auditor internal sistem manajemen mutu di SMAM 1 Gresik. Membuat konsep layanan sesuai standar mutu, menganalisis sistem, dan mengevaluasi implementasi program yang menjadi pekerjaannya sehari-hari membuatnya terbiasa berpikir dengan perspektif proses dan orientasi mutu.&nbsp;</p><p><span style="background-color: rgba(var(--bs-light-rgb),var(--bs-bg-opacity)); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Pada tahun 2013, ia mengembangkan layanan konsultan kreatif dan pengembangan media melalui lembaga yang ia dirikan yakni Caremedia Communication. Dengan tekun dan berkelanjutan ia mendampingi beragam lembaga dalam mengelola media, merumuskan program kreatif, hingga penerbitan publikasi berkala.&nbsp;</span></p><p>Meneliti, menulis, dan memicu perubahan adalah passion lulusan Magister Sosiologi Universitas Muhammadiyah Malang ini. “Bagi saya, Tuhan itu Maha Kreatif. Dan kita harus mampu menemukan, memimpikan, dan mewujudkan ciptaan-ciptaan unik. Itulah yang saya sebut dengan istilah Spiritualitas-Kreatif,” ujarnya.&nbsp;</p><p>Bergabung sebagai peneliti di The JawaPos Institute of Pro-Otonomi (JPIP) sejak tahun 2018, ia terlibat dalam beberapa proyek. Di antaranya sebagai Communication Specialist proyek Ayo Inklusif! bersama USAID dan Researcher proyek Rumah Inovasi bersama KOMPAK-DFAT. Sejak tahun 2019 hingga sekarang terlibat sebagai Tim Penilai Provinsi aspek Inovasi Pelayanan Publik dalam Sinergisitas Penyelenggaraan Pemerintahan di Kecamatan Pemprov Jawa Timur.&nbsp;</p><p>Selain menjadi editor dan indie publisher, juga aktif menulis buku. Beberapa judul yang telah diterbitkan di antaranya Wujudkan Tulisanmu Menjadi Buku (Esensi Erlangga), Jurnalistik Asyik (Esensi Erlangga), Sang Genius Politik (Caremedia), dan Pedoman Praktis Menerbitkan Majalah Sekolah (Caremedia).</p>',
                'photo' => 'profile_pictures/faizin.jpeg',
            ],

            // Inovator
            [
                'name' => 'Siti Andriati',
                'email' => 'siti@gmail.com',
                'password' => Hash::make('siti'),
                'roles' => ['inovator'],
                'instance_name' => '',
                'description' => '',
                'photo' => '',
            ],
            [
                'name' => 'Sunarto',
                'email' => 'sunarto@gmail.com',
                'password' => Hash::make('sunarto'),
                'roles' => ['inovator'],
                'instance_name' => '',
                'description' => '',
                'photo' => '',
            ],
            [
                'name' => 'Firdaus',
                'email' => 'firdaus@gmail.com',
                'password' => Hash::make('firdaus'),
                'roles' => ['inovator'],
                'instance_name' => '',
                'description' => '',
                'photo' => '',
            ],
            [
                'name' => 'Anny',
                'email' => 'anny@gmail.com',
                'password' => Hash::make('anny'),
                'roles' => ['inovator'],
                'instance_name' => '',
                'description' => '',
                'photo' => '',
            ],
            [
                'name' => 'Rimba',
                'email' => 'rimba@gmail.com',
                'password' => Hash::make('rimba'),
                'roles' => ['inovator'],
                'instance_name' => '',
                'description' => '',
                'photo' => '',
            ],
            [
                'name' => 'Shodikin',
                'email' => 'shodikin@gmail.com',
                'password' => Hash::make('shodikin'),
                'roles' => ['inovator'],
                'instance_name' => '',
                'description' => '',
                'photo' => '',
            ],


            // Admin Inovasi
            [
                'name' => 'Admin Inovasi',
                'email' => 'admin_inovasi@gmail.com',
                'password' => Hash::make('admin'),
                'roles' => ['admin inovasi'],
                'instance_name' => 'Instansi Terkait',
                'description' => '',
                'photo' => '',
            ],
            [
                'name' => 'Dinas Kelautan dan Perikanan',
                'email' => 'dinlaut@gmail.com',
                'password' => Hash::make('laut'),
                'roles' => ['admin inovasi'],
                'instance_name' => 'UPT Laboratorium Kesehatan Ikan dan Lingkungan- Dinas Kelautan dan Perikanan Provinsi Jawa Timur',
                'description' => '',
                'photo' => '',
            ],
            [
                'name' => 'Dinas Pendidikan Provinsi Jawa Timur',
                'email' => 'dispendikjatim@gmail.com',
                'password' => Hash::make('disdik'),
                'roles' => ['admin inovasi'],
                'instance_name' => 'Dinas Pendidikan Provinsi Jawa Timur',
                'description' => '',
                'photo' => '',
            ],
            [
                'name' => 'Badan Penelitian dan Pengembangan Provinsi Jawa Timur',
                'email' => 'badanpeneliti@gmail.com',
                'password' => Hash::make('badanpeneliti'),
                'roles' => ['admin inovasi'],
                'instance_name' => 'Badan Penelitian dan Pengembangan Provinsi Jawa Timur',
                'description' => '',
                'photo' => '',
            ],
            [
                'name' => 'Rumah Sakit Jiwa Provinsi Jawa Timur',
                'email' => 'rsj@gmail.com',
                'password' => Hash::make('rsj'),
                'roles' => ['admin inovasi'],
                'instance_name' => 'Rumah Sakit Jiwa Provinsi Jawa Timur',
                'description' => '',
                'photo' => '',
            ],

            // Publik
            [
                'name' => 'Publik',
                'email' => 'publik@gmail.com',
                'password' => Hash::make('publik'),
                'roles' => ['publik'],
                'instance_name' => 'Just another fulan',
                'description' => '',
                'photo' => '',
            ]
        ];

        foreach ($users as $key => $value) {
            $user = new User;

            $user->name = $value['name'];
            $user->email = $value['email'];
            $user->password = $value['password'];
            $user->profile_photo_path = $value['photo'] ?? '';
            $user->instance_name = $value['instance_name'] ?? '';
            $user->description = $value['description'] ?? '';

            $user->assignRole($value['roles']);

            $user->save();
        }
    }
}
