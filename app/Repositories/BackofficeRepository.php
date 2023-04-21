<?php

namespace App\Repositories;

use App\Http\Requests;

//Facades
use Illuminate\Support\Facades\DB;

//Models
use App\Models\Projects;
use App\Models\Project_type;




class BackofficeRepository
{
    public static function getAllProjects()
    {
        $projects = Projects::with([
            'projects_languages'
        ])
            ->get();

        return $projects;
    }
	public static function getLastProject()
    {
        $projects = Projects::with([
            'projects_languages'
        ])
            ->where('projects.is_active', '=', '1')
            ->orderBy('id', 'desc')
            ->first();

        return $projects;
    }

    public static function findProject($slug)
    {
        $projects = Projects::findOrFail($slug);

        return $projects;
    }

    public static function getProjectType() 
    {
        $project_types = Project_type::all();

        return $project_types;
    }

}
