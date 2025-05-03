<?php

namespace App\Models;
class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '10000000',
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '5000000',
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '2000000',
            ]
        ];
    }
}
