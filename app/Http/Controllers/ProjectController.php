<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;

class ProjectController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:project-list|project-create|project-edit|project-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:project-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->paginate(20);
        $services = Service::all();
        return view('admin.pages.project', compact('projects', 'services'));
    }

    public function postProject(Request $request)
    {
        $this->validate(request(), [
            'project_name'          => 'required',
            'project_description'   => 'required',
        ]);

        $home_active = $request->get('homepage_actived');
        $home_active = isset($home_active) ? 1 : 0;
        
        if ($request->hasFile('project_image')) {
            // Nếu không thì in ra thông báo
            $cover_image = $request->file('project_image');
            $storedPath  = $cover_image->store('public/projects');
            $values = [
                'name'              => trim($request->get('project_name')),
                'client'            => trim($request->get('client')),
                'client_website'    => trim($request->get('client_website')),
                'finish_date'       => trim($request->get('finish_date')),
                'short_description' => trim($request->get('short_description')),
                'description'       => trim($request->get('project_description')),
                'cover_image'       => substr($storedPath, strlen('public/')),
                'service_id'        => $request->get('service_id'),
                'homepage_actived'  => $home_active,
            ];
        }else{
            $values = [
                'name'              => trim($request->get('project_name')),
                'client'            => trim($request->get('client')),
                'client_website'    => trim($request->get('client_website')),
                'finish_date'       => trim($request->get('finish_date')),
                'short_description' => trim($request->get('short_description')),
                'description'       => trim($request->get('project_description')),
                'service_id'        => $request->get('service_id'),
                'homepage_actived'  => $home_active,
            ];
        }

        $project = Project::updateOrCreate(['id' => $request->get('id')], $values);
        $message = '"' . $project->name . '" successfully';

        $request->session()->flash('message', $message);

        return back();
    }

    public function getProjectByJson(Request $request)
    {
        $project = Project::find($request->get('id'));
        return response()->json($project);
    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        $message = 'Delete project' . ' ' . $project->name . ' ' . 'successfully !!!';
        return redirect()->route('admin.pages.project')->with(compact('message'));
    }
}
