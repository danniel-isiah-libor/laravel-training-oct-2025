<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public static function getData()
    {
        return (object)[
            [
                'company_name' => 'Inventive Media',
                'position' => 'Software Developer',
                'tenure' => '2020-01-15 - 2022-06-30'
            ],
            [
                'company_name' => 'Cloud Panda',
                'position' => 'Software Developer',
                'tenure' => '2020-01-12 - 2022-06-30'
            ],
            [
                'company_name' => 'Esquire Financing Inc.',
                'position' => 'Software Developer',
                'tenure' => '2020-01-12 - 2022-06-30'
            ],
        ];
    }
}
