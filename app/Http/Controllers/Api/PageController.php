<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    public function index(){
        $projects = Project::with('technologies', 'type')->paginate(8);
        foreach ($projects as $project) {
            if($project->image){
                $project->image = asset('storage/' . $project->image);
            }else{
                $project->image = asset('storage/uploads/placeholder.jpg');
            };
        }

        return response()->json($projects);
    }


    public function getProject($slug){
        $project = Project::where('slug', $slug)->with('technologies', 'type')->first();

        if($project->image){
            $project->image = asset('storage/' . $project->image);
        }else{
            $project->image = asset('storage/uploads/placeholder.jpg');
        };

        if($project) $success = true;
        else $success = false;

        return response()->json(compact('project','success'));
    }
}
