<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->text(20);
        $slug = Str::slug($title);
        $image = fake()->image(null, 300, 300);
        $img_url = Storage::putFileAs('project_images', $image, "$slug.png");
        return [
            'title' => $title,
            'slug' => $slug,
            'content' => fake()->paragraph(15, true),
            'image' => $img_url,
        ];
    }
}
