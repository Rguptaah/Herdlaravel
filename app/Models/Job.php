<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model{
    protected $table = 'job_listings';
    // public static function all() : array
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Designer',
    //             'salary' => '$10,000'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Developer',
    //             'salary' => '$50,000'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Project Manager',
    //             'salary' => '$70,000'
    //         ]
    //     ];
    // }

    // public static function find(int $id): array
    // {
    //     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
    //     if (!$job) {
    //         abort(404, 'Job Not Found');
    //     }
    //     return $job;
    // }
}
