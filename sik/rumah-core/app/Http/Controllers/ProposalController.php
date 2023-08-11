<?php

namespace App\Http\Controllers;

use App\Models\Innovation;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
        return view('proposal.proposal', [
            'proposal' => [],
        ]);
    }

	public function store(Request $request)
	{
		$form = $request->post();

		dd($form);

	}
}
