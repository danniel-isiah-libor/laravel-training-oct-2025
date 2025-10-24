<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    static function getData() {
        return [
                    1 => (object)[
                    'company_name'=>'Company 1',
                    'position'=>'Position 1',
                    'tenure'=>'Tenure 1',
                    ],
                    2 => (object)[
                    'company_name'=>'Company 2',
                    'position'=>'Position 2',
                    'tenure'=>'Tenure 2',
                    ],
                    3 => (object)[
                    'company_name'=>'Company 3',
                    'position'=>'Position 3',
                    'tenure'=>'Tenure 3',
                    ],
            ];
    }
}
