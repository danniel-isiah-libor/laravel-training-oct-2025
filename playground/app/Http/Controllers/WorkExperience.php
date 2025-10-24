<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkExperience;

class WorkExperienceController extends Controller
{
   public static function getData()
    {
        return (object) [
            1 => (object) [
                'company_name' => 'Edmar Dolar',
                'position' => 'IT',
                'tenure' => '2020-07-15 - 2025-06-30',
            ],
            2 => (object) [
                'company_name' => 'Cabiling Dolar',
                'position' => 'PSI',
                'tenure' => '2020-07-15 - 2025-06-30',
            ],
        ];
    }
}
