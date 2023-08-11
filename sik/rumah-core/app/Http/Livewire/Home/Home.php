<?php

namespace App\Http\Livewire\Home;

use App\Models\City;
use App\Models\FieldTrip;
use App\Models\Innovation;
use App\Models\InnovationCategory;
use App\Models\TrainingCategory;
use App\Models\Training;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $innovations = Innovation::latest('year_start')->published()->latest('id')->limit(6)->get();
        $trainings = Training::latest('id')->limit(5)->get();
        $fieldTrips = FieldTrip::latest('id')->limit(5)->get();
		$infoTerbaru = TrainingCategory::where('slug', 'berita-kegiatan')->first()
			->training()->latest('created_at')->limit(2)->get();

		$centerPoint = new \stdClass;
		$centerPoint->lat = env('MAP_CENTER_POINT_LAT', -9.2406129);
		$centerPoint->lng = env('MAP_CENTER_POINT_LAT', 122.8742191);;
		$centerPoint->zoomLevel = env('MAP_CENTER_POINT_ZOOM', 7);

        return view('livewire.home.home', [
            'innovations' => $innovations,
            'trainings' => $trainings,
            'fieldTrips' => $fieldTrips,
			'category_list' => InnovationCategory::all(),
			'city_list' => City::all(),
			'centerPoint' => $centerPoint,
			'infoTerbaru' => $infoTerbaru,
        ]);
    }
}
