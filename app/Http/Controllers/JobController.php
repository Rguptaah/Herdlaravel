<?php
namespace App\Http\Controllers;

class Job {
    public static function all() : array
    {
        return [
            [
                'id' => 1,
                'title' => 'Designer',
                'salary' => '$10,000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$50,000'
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'salary' => '$70,000'
            ]
        ];
    }
}