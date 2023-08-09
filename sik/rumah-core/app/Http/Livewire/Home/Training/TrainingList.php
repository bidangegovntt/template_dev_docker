<?php

namespace App\Http\Livewire\Home\Training;

use App\Helpers\Queries;
use Livewire\Component;
use Livewire\WithPagination;

class TrainingList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $trainingList = Queries::TrainingList();

        return view('livewire.home.training.training-list', [
            'training_list' => $trainingList,
        ]);
    }
}
