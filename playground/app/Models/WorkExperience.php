<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table = 'work_experiences';

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

    public static function getDataById($id)
    {
        $data = self::getData();
        return $data->{$id} ?? null;
    }
}
