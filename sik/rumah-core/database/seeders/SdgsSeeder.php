<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sdgs;

class SdgsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sdgs = [
			['1', "Tanpa Kemiskinan"],
			['2', "Kehidupan Sehat dan Sejahtera"],
			['3', "Kesetaraan Gender"],
			['4', "Energi Bersih dan Terjangkau"],
			['5', "industri, inovasi dan infrastruktur"],
			['6', "kota dan pemukiman yang berkelanjutan"],
			['7', "penanganan dan perubahan iklim"],
			['8', "ekosistem daratan"],
			['9', "kemitraan untuk mencapai tujuan"],
			['10', "Tanpa Kelaparan"],
			['11', "Pendidikan Berkualitas"],
			['12', "Air Bersih dan Sanitasi Layak"],
			['13', "Pekerjaan Layak dan Pertumbuhan Ekonomi"],
			['14', "Berkurangnya Kesenjangan"],
			['15', "Konsumsi dan Produksi yang Bertanggung Jawab"],
			['16', "Ekonomi Lautan"],
			['17', "Perdamaian, Keadilan dan Kelembagaan yang Tangguh"],
		];

		foreach($sdgs as $s)
		{
			$sdg = new Sdgs;
			$sdg->id = $s[0];
			$sdg->name = $s[1];
			$sdg->save();
		}
    }
}
