<?php

namespace App\Http\Livewire\Home;

use App\Models\FieldTrip;
use App\Models\Innovation;
use App\Models\Training;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $innovations = Innovation::latest('year_start')->latest('id')->limit(6)->get();
        $trainings = Training::latest('id')->limit(5)->get();
        $fieldTrips = FieldTrip::latest('id')->limit(5)->get();

        return view('livewire.home.home', [
            'innovations' => $innovations,
            'trainings' => $trainings,
            'fieldTrips' => $fieldTrips,
        ]);
    }
}
