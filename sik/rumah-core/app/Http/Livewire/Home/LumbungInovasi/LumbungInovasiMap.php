<?php

namespace App\Http\Livewire\Home\LumbungInovasi;

use App\Helpers\Queries;
use App\Models\City;
use App\Models\InnovationCategory;
use Livewire\Component;
use Livewire\WithPagination;

class LumbungInovasiMap extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $category;
    public $city;
    public $title;
    public $year_start;

    public function render()
    {
        $search = [
            'category' => $this->category,
            'city' => $this->city,
            'title' => $this->title,
            'year_start' => $this->year_start,
        ];

        $innovation_list = Queries::innovationList(5, $search);

        return view('livewire.home.lumbung-inovasi.lumbung-inovasi-map', [
            'innovation_list' => $innovation_list,
            'category_list' => InnovationCategory::all(),
            'city_list' => City::all(),
        ]);
    }

    public function cari()
    {
        $this->gotoPage('1');
    }

    public function reset_cari()
    {
        $this->year_start = null;
        $this->category = null;
        $this->city = null;
        $this->title = null;

        $this->gotoPage('1');
    }
}
