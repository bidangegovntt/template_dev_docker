<?php

namespace App\Http\Controllers;

use App\Helpers\Queries;
use App\Models\FieldTrip;
use Illuminate\Http\Request;

class FieldTripController extends Controller
{
    public function showKunjungan(Request $request)
    {
        $kunjungan_id = $request->id;

        $kunjungan = FieldTrip::with(['innovation' => function($innovation) {
            $innovation->with('innovator')->get();
        }])->find($kunjungan_id);

        // dd($kunjungan);

        // $kunjungan = Queries::FieldTripList("", $kunjungan_id );

        return view('home.kunjungan-lapangan-show', [
            'kunjungan' => $kunjungan,
        ]);
    }
}
