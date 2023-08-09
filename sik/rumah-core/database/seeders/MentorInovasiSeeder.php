<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class MentorInovasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::findOrCreate('mentor inovasi');

        // start - ubah dokter ke mentor untuk beberapa user
        $users = ['19', '21', '22', '23', '24'];

        foreach ($users as $key => $value) {
            $user = User::find($value);

            $user->roles()->detach();

            $user->assignrole('mentor inovasi');
        }

        // masukkan inovator ke dokter inovasi
        $innovator = User::role('inovator')->get();

        foreach ($innovator as $key => $value) {
            $value->assignrole('dokter inovasi');
        }
    }
}
