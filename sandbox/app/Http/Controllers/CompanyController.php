<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company($id = null){
        $companyList = Company::getData();

        if ($id) {
            $companyList = [$companyList->$id];
        }

        $list = '<ul>';
        
        foreach ($companyList as $value) {
            $list .= '<li>Company: ' . $value['company_name'] .'</li>';
            $list .= '<li>Position: '. $value['position'] .'</li>';
            $list .= '<li>Tenure: '  . $value['tenure'] .'</li>';

            $list .= '</br>';
        }

        $list .= '<ul>';

        return $list;
        
    }
}
