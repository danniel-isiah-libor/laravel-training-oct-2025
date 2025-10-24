<?php

namespace App\Http\Controllers;

use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function work_experience($id = null)
    {
        $li = '';
        $work_experiences = WorkExperience::getData();

        foreach ($id ? [$work_experiences->$id] : $work_experiences  as $work_experience) {
            if (!empty($work_experience)) {
                foreach ($work_experience as $values) {
                    $li .= "<li>$values</li>";
                }
            } else {
                $li = 'Not existing data';
            }
        }
        $html = "<ul>$li</ul><br>";

        return $html;
    }
}
