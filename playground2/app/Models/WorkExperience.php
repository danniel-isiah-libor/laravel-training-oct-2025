<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    public static function getData()
    {
        return (object)[
            1 => [
                'company_name' => 'Inventive Media',
                'position' => 'Software Developer',
                'tenure' => '2020-01-15 - 2022-06-30',
            ],

            2 => [
                'company_name' => 'Tech Solutions',
                'position' => 'Software Developer',
                'tenure' => '2022-07-01 - 2024-05-31',
            ],
        ];
    }
}