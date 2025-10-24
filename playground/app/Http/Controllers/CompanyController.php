<?php
namespace App\Http\Controllers;

use App\Models\WorkExperience;

class CompanyController extends Controller
{
    //
    public function companyInfo()
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

    public function workExperience($id = null)
    {
        $data = WorkExperience::companyInfo();

        if (! $id) {
            return $data;
        }

        $view = '<h1>' . $data->$id['company_name'] . '</h1>
                <p>Position: ' . $data->$id['position'] . '</p>
                <p>Tenure: ' . $data->$id['tenure'] . '</p>';

        return $view ?? '<h2>No work experience found for the given ID.</h2>';
    }
}
