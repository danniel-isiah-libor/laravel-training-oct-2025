<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    //
    public static function companyInfo()
    {
        return (object) [
            1 => [
                'company_name' => 'Acme Corp',
                'position'     => '123 Main St, Anytown, USA',
                'tenure'       => '2020-01-15 - 2022-06-30',
            ],
            2 => [
                'company_name' => 'test Corp',
                'position'     => '123 Main St, Anytown, USA',
                'tenure'       => '2020-01-15 - 2022-06-30',
            ],

        ];

    }
}
