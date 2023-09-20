<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$kategories =  [
			['1', 'kesehatan'],
			['2', 'petumbuhan ekonomi dan kesempatan kerja'],
			['3', 'ketahanan pangan'],
			['4', 'inklusi sosial'],
			['5', 'tata kelola pemerintahan'],
			['6', 'ketahanan bencana'],
			['7', 'pendidikan'],
			['8', 'pengentasan kemiskinan'],
			['9', 'pemberdayaan masyarakat'],
			['10', 'energi dan lingkungan hidup'],
			['11', 'penegakan hukum'],
		];

		foreach($kategories as $c)
		{
			$kategori = new Kategori;
			$kategori->id = $c[0];
			$kategori->cat_name = $c[1];
			$kategori->save();
		}
    }
}
