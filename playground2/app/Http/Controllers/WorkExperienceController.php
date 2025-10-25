<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function show($id = null)
    {
        $records = WorkExperience::getData();

        if ($id) {
            $records = [$records->$id];
        }

        $list = '<ul>';

        foreach ($records as $key => $record) {
            $list .= '<li>';
            $list .= 'Company Name: ' . $record['company_name'];
            $list .= '</li>';

            $list .= '<li>';
            $list .= 'Position: ' . $record['position'];
            $list .= '</li>';

            $list .= '<li>';
            $list .= 'Tenure: ' . $record['tenure'];
            $list .= '</li>';

            $list .= '<br/> </br>';
        }

        $list .= '</ul>';

        return $list;
    }
}