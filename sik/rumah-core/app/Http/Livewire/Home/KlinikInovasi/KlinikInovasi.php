<?php

namespace App\Http\Livewire\Home\KlinikInovasi;

use App\Models\LearningMaterial;
use Livewire\Component;
use Livewire\WithPagination;

class KlinikInovasi extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $cari_materi = "";

    public function render()
    {
        return view('livewire.home.klinik-inovasi.klinik-inovasi', [
            'learning_materials' => $this->learningList()
        ]);
    }

    public function learningList()
    {
        $learning_materials = LearningMaterial::whereNotNull('id');

        if ($this->cari_materi != "") {
            $learning_materials->where("title", 'like', '%' . $this->cari_materi . '%');
        }

        return $learning_materials->paginate(5, ['learning_materials.*']);
    }
}
