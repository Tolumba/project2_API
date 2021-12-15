<?php

namespace Database\Factories;

use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'desk_list_id' => DeskList::all()->random()->id,
            'name' => $this -> faker -> word
            //
        ];
    }
}
