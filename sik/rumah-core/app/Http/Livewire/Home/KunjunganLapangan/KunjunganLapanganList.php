<?php

namespace App\Http\Livewire\Home\KunjunganLapangan;

use App\Models\FieldTrip;
use Livewire\Component;
use Livewire\WithPagination;

class KunjunganLapanganList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $kunjunganList = FieldTrip::with('innovation')->latest('id')->paginate(5);

        return view('livewire.home.kunjungan-lapangan.kunjungan-lapangan-list', [
            'kunjungan_list' => $kunjunganList,
        ]);
    }
}
