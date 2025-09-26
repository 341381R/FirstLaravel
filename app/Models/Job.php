<?php

namespace app\Models;

use \Illuminate\Support\Arr;

class Job
{
    public static function AllJobs(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'colonel cat',
                'salary' => '60 cans of cat food'
            ],
            [
                'id' => 2,
                'title' => 'mayor cat',
                'salary' => '80 cans of cat food'
            ],
            [
                'id' => 3,
                'title' => 'factory worker cat',
                'salary' => '45 cans of cat food'
            ],
            [
                'id' => 4,
                'title' => 'computer cat',
                'salary' => '100 cans of cat food'
            ],
            [
                'id' => 5,
                'title' => 'copycat',
                'salary' => '100 cans of cat food'
            ]
        ];
    }

    public static function JobSearch(int $id): array
    {
        $job = Arr::first(static::AllJobs(), fn($job) => $job['id'] == $id);

        if (! $job)
        {
            abort(404);
        }
    }
}
    