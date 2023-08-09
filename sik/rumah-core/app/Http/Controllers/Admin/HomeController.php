<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Innovation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $statistic = $this->statistic();
        // dd($statistic);

        return view('admin.index', compact('statistic'));
    }

    public function statistic()
    {
        $statistic = Innovation::groupBy(DB::raw('city_id'))
            ->has('city')
            ->select(['innovations.*', DB::raw('count(*) jumlah')])
            ->orderBy(DB::raw('jumlah'), 'desc')
            // ->orderBy(DB::raw('users.name'), 'asc')
            ->get();

        return $statistic;
    }
}
