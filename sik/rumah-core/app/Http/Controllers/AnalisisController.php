<?php

namespace App\Http\Controllers;

use App\Models\Innovation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalisisController extends Controller
{
    public function show()
    {
        $categories = $this->category_count();
        $years = $this->year_count();
        $statuses = $this->status_count();

        // dd(compact('categories', 'years', 'statuses'));

        return view('home.analisis-inovasi', compact('categories', 'years', 'statuses'));
    }

    private function category_count()
    {
        return Innovation::groupBy('category_id')
            ->with('category')
            ->select(DB::raw('category_id, count(category_id) count_category'))->get();
    }

    private function year_count()
    {
        return Innovation::groupBy('year_start')
            ->select(DB::raw('year_start, count(year_start) count_year'))->get();
    }

    private function status_count()
    {
        return Innovation::groupBy('sustainability_status_id')
            ->with('sustainabilityStatus')
            ->select(DB::raw('sustainability_status_id, count(sustainability_status_id) count_status'))->get();
    }
}
