<?php

namespace App\Http\Controllers;

use App\Models\Innovation;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
       // dd ("coba proposal controler");

        return view('proposal.proposal', [
            'proposal' => [],
        ]);
/*
        return view(
            'home.lumbung-inovasi-map',
            [
                'category_list' => InnovationCategory::all(),
                'city_list' => City::all(),
            ]
        );
 */
    }
}
