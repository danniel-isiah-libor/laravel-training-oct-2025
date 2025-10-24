<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    public static function getWorkExperience()
    {
        return (object)[
            1=> [
            'company_name' => 'Francis Ferrer',
            'position' => 'software engineer',
            'tenure' => '2020-01-15 - 2022-06-30'
            ],
            
            2=> [
            'company_name' => 'Angel Ferrer',
            'position' => 'Clerk II',
            'tenure' => '2021-01-15 - 2023-06-30'
            ],
        ];
    }
}
