<?php

namespace Database\Factories;

use App\Models\InnovationDoctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class InnovationDoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InnovationDoctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'photo' => $this->simpleRandomFace(Storage::disk('public'), 360, 360),
            'description' => $this->faker->paragraph(),
            'instance_name' => $this->faker->domainWord(),
        ];
    }

    public function simpleRandomFace($storage, $width, $height)
    {
        $permalink = sprintf('https://api.lorem.space/image/face?w=%s&h=%s', $width, $height);

        $glob = file_get_contents($permalink);
        $randomName = md5($glob) . '.jpg';

        $storage->put($randomName, $glob);

        return $randomName;
    }
}
