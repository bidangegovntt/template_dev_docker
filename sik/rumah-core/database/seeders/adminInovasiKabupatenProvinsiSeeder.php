<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class adminInovasiKabupatenProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminProv = Role::findOrCreate('admin biro provinsi');
        $adminKab = Role::findOrCreate('admin biro kabupaten');
        $adminInovasi = Role::findOrCreate('admin inovasi');


        Permission::findOrCreate('create inovasi sedaerah');
        Permission::findOrCreate('update inovasi sedaerah');

        Permission::findOrCreate('create inovasi milik sendiri');
        Permission::findOrCreate('update inovasi milik sendiri');

        Permission::findOrCreate('create inovator se-daerah');
        Permission::findOrCreate('update inovator se-daerah');

        Permission::findOrCreate('create admin inovasi kabupaten');
        Permission::findOrCreate('update admin inovasi kabupaten');


        if ($adminProv)
        {
            $adminProv->givePermissionTo([
                'create inovasi sedaerah',
                'update inovasi sedaerah',
                'create inovator sedaerah',
                'update inovator sedaerah',
                'create admin inovasi kabupaten',
                'update admin inovasi kabupaten',
            ]);
        }

        if ($adminKab)
        {
            $adminKab->givePermissionTo([
                'create inovasi sedaerah',
                'update inovasi sedaerah',
                'create inovator sedaerah',
                'update inovator sedaerah',
            ]);
        }

        if ($adminInovasi)
        {
            $adminInovasi->givePermissionTo([
                'create inovasi milik sendiri',
                'update inovasi milik sendiri',
            ]);
        }
    }
}
