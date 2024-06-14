<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aritkel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $image = rand(1, 6);

        return [
            'image' => "img/artikel/artikel-$image.png",
            'title' => fake('id_ID')->sentences(1, true),
            'sub' => fake('id_ID')->sentences(1, true),
            'deskripsi' => "<p>".implode("</p><p>", fake('id_ID')->paragraphs(20))."</p>",
        ];
    }
}
