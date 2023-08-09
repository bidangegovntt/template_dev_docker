<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Innovation;
use App\Models\InnovationCategory;
use Illuminate\Http\Request;

class MapsInnovationsController extends Controller
{
    public function index()
    {
        return view(
            'home.lumbung-inovasi-map',
            [
                'category_list' => InnovationCategory::all(),
                'city_list' => City::all(),
            ]
        );
    }

    public function listInnovations(Request $request)
    {
        $innovations = Innovation::where('latitude', '!=', '0')->where('longitude', '!=', '0');

        if ($request->query('category') != "") {
            $innovations->where('category_id', '=',  $request->query('category'));
        }

        if ($request->query('city') != "") {
            $innovations->where('city_id', '=',  $request->query('city'));
        }

        if ($request->query('title') != "") {
            $innovations->where('title', 'like', '%' . $request->query('title') . '%');
        }

        if ($request->query('year_start') != "") {
            $innovations->where('year_start', 'like', '%' . $request->query('year_start') . '%');
        }

        $innovations = $innovations->with(['category'])->latest()->get();

        // dd($innovations);

        $features = [];

        foreach ($innovations as $key => $value) {
            $features[] = [
                "type" => "Feature",
                "geometry" => [
                    "type" => "Point",
                    "coordinates" => [
                        $value->longitude, //long
                        $value->latitude // lat
                    ]
                ],
                "properties" => [
                    "id" => $value->id,
                    "name" => $value->title,
                    "lat" => $value->latitude,
                    "lon" => $value->longitude,
                    "alamat" => $value->address,
                    "tahun" => $value->year_start,
                    "kategori" => $value->category->name,
                ]
            ];
        }

        $data_collection =  [
            "type" => "FeatureCollection",
            "features" => $features,
        ];



        // $data_collection = [
        //     "type" => "FeatureCollection",
        //     "features" => [
        //         [
        //             "type" => "Feature",
        //             "geometry" => [
        //                 "type" => "Point",
        //                 "coordinates" => [
        //                     112.6402426,
        //                     -7.2834522
        //                 ]
        //             ],
        //             "properties" => [
        //                 "id" => 1,
        //                 "name" => "AKSI e-MU BAK RAJA (APLIKASI ELEKTRONIK TIKET MUDIK BALIK GRATIS JAWA TIMUR)",
        //                 "lat" => "-7.2834522",
        //                 "lon" => "112.6402426",
        //                 "alamat" => "JALAN A. YANI 268 SURABAYA"
        //             ]
        //         ],
        //         [
        //             "type" => "Feature",
        //             "geometry" => [
        //                 "type" => "Point",
        //                 "coordinates" => [
        //                     111.2387531256,
        //                     -7.676775204327
        //                 ]
        //             ],
        //             "properties" => [
        //                 "id" => 2,
        //                 "name" => "PAGUYUBAN LAWU SEHAT",
        //                 "lat" => "-7.1643097",
        //                 "lon" => "112.626448",
        //                 "alamat" => "JALAN RAYA SARANGAN NO 138 PLAOSAN MAGETAN"
        //             ]
        //         ],
        //         [
        //             "type" => "Feature",
        //             "geometry" => [
        //                 "type" => "Point",
        //                 "coordinates" => [
        //                     113.7152294,
        //                     -8.1756257
        //                 ]
        //             ],
        //             "properties" => [
        //                 "id" => 3,
        //                 "name" => "SI-MAPAN LAYANAN UPT PSMB-LT JEMBER",
        //                 "lat" => "-8.1756257",
        //                 "lon" => "113.7152294",
        //                 "alamat" => "JL. KALIMANTAN NO. 1 JEMBER"
        //             ]
        //         ]
        //     ]
        // ];

        // dd($data_collection);

        echo json_encode($data_collection);
    }
}
