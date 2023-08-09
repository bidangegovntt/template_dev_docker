<?php

namespace App\Http\Livewire\Home\ForumReplikasi;

use App\Helpers\Queries;
use App\Models\City;
use App\Models\Innovation;
use App\Models\InnovationCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ForumReplikasiList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $year_start;
    public $category;
    public $city;
    public $title;

    public function render()
    {
        $search = [
            'category' => $this->category,
            'city' => $this->city,
            'title' => $this->title,
            'year_start' => $this->year_start,
        ];

        return view('livewire.home.forum-replikasi.forum-replikasi-list', [
            'innovation_list' => Queries::innovationList(5, $search),
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
