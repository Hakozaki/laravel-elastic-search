<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {       
        dd($this->tags());
        return [
            'title' => fake()->sentence(),
            'body' => fake()->text(),
            'tags' => $this->tags(),
        ];
    }

    private function tags(): array
    {
        return collect(['php', 'ruby', 'java', 'javascript', 'bash'])
            ->random(2)
            ->values()
            ->all();
    }
}
