<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function show($id=null) {
        $workExperiences = WorkExperience::getData();

        if($id && isset($workExperiences[$id])) {
            $we = $workExperiences[$id];
            $response = "<strong>Work Experience #".$id.":</strong><br/><br/>";
            $response .="Company Name: ".$we->company_name." <br/>";
            $response .=" Position: ".$we->position." <br/>";
            $response .="Company tenure: ".$we->tenure." <br/>";
            return $response;
        }
        elseif($id && !isset($workExperiences[$id])) {
            return "Work Experience with ID ".$id." not found.";
        }
        else {
            $response = "<H1>Work Experiences</H1><br/>";
            foreach($workExperiences as $key => $we) {
                $response .="<hr/>";
                $response .="<strong>Experience #".$key.":</strong><br/><br/>";
                $response .="Company Name: ".$we->company_name." <br/>";
                $response .=" Position: ".$we->position." <br/>";
                $response .="Company tenure: ".$we->tenure." <br/>";
            }
            return $response;
        }
    }
}
