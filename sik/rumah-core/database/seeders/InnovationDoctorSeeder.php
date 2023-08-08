<?php

namespace Database\Seeders;

use App\Models\InnovationDoctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory;

class InnovationDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        $doctorList = [
            [
                'name' => 'A. Faizin Karimi',
                'email' => 'faizin@gmail.com',
                // 'username' => 'faizin',
                'password' => Hash::make('faizin'),
                'role' => 'doctor',
                'instance_name' => 'Peneliti, Penulis, Konsultan Kreatif dan Pengembangan Media',
                'description' => '<p>Lahir di Gresik, 26 April 1986 pria yang akrab dipanggil Faizin ini memulai kariernya sebagai seorang penjamin mutu bidang pendidikan dan auditor internal sistem manajemen mutu di SMAM 1 Gresik. Membuat konsep layanan sesuai standar mutu, menganalisis sistem, dan mengevaluasi implementasi program yang menjadi pekerjaannya sehari-hari membuatnya terbiasa berpikir dengan perspektif proses dan orientasi mutu.&nbsp;</p><p><span style="background-color: rgba(var(--bs-light-rgb),var(--bs-bg-opacity)); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);">Pada tahun 2013, ia mengembangkan layanan konsultan kreatif dan pengembangan media melalui lembaga yang ia dirikan yakni Caremedia Communication. Dengan tekun dan berkelanjutan ia mendampingi beragam lembaga dalam mengelola media, merumuskan program kreatif, hingga penerbitan publikasi berkala.&nbsp;</span></p><p>Meneliti, menulis, dan memicu perubahan adalah passion lulusan Magister Sosiologi Universitas Muhammadiyah Malang ini. “Bagi saya, Tuhan itu Maha Kreatif. Dan kita harus mampu menemukan, memimpikan, dan mewujudkan ciptaan-ciptaan unik. Itulah yang saya sebut dengan istilah Spiritualitas-Kreatif,” ujarnya.&nbsp;</p><p>Bergabung sebagai peneliti di The JawaPos Institute of Pro-Otonomi (JPIP) sejak tahun 2018, ia terlibat dalam beberapa proyek. Di antaranya sebagai Communication Specialist proyek Ayo Inklusif! bersama USAID dan Researcher proyek Rumah Inovasi bersama KOMPAK-DFAT. Sejak tahun 2019 hingga sekarang terlibat sebagai Tim Penilai Provinsi aspek Inovasi Pelayanan Publik dalam Sinergisitas Penyelenggaraan Pemerintahan di Kecamatan Pemprov Jawa Timur.&nbsp;</p><p>Selain menjadi editor dan indie publisher, juga aktif menulis buku. Beberapa judul yang telah diterbitkan di antaranya Wujudkan Tulisanmu Menjadi Buku (Esensi Erlangga), Jurnalistik Asyik (Esensi Erlangga), Sang Genius Politik (Caremedia), dan Pedoman Praktis Menerbitkan Majalah Sekolah (Caremedia).</p>',
                'photo' => 'profile_pictures/faizin.jpeg',
            ],
            [
                'name' => $faker->name(),
                'email' => $faker->email(),
                // 'username' => 'faizin',
                'password' => Hash::make('doctor'),
                'role' => 'doctor',
                'instance_name' => $faker->domainWord(),
                'description' => '<p>' . implode('</p><p>', $faker->paragraphs(10)) . '</p>',
                'photo' => '',
            ],
            [
                'name' => $faker->name(),
                'email' => $faker->email(),
                // 'username' => 'faizin',
                'password' => Hash::make('doctor'),
                'role' => 'doctor',
                'instance_name' => $faker->domainWord(),
                'description' => '<p>' . implode('</p><p>', $faker->paragraphs(10)) . '</p>',
                'photo' => '',
            ],
        ];

        foreach ($doctorList as $key => $value) {
            $doctor = new InnovationDoctor();

            $doctor->fullname = $value['name'];
            $doctor->instance_name = $value['instance_name'];
            $doctor->photo = $value['photo'];
            $doctor->description = $value['description'];

            $doctor->save();

            $doctor->user()->create([
                'name' => $value['name'],
                'email' => $value['email'],
                // 'username' => 'siti',
                'password' => $value['password'],
                'role' => $value['role'],
                'profile_photo_path' => $value['photo'],
                // 'userable_type' => '\App\Models\InnovationDoctor',
                // 'userable_id' => $doctor->id,
            ]);
        }

        // \App\Models\InnovationDoctor::factory(10)->create();
    }
}
