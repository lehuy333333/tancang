<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:service-list|service-create|service-edit|service-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:service-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:service-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:service-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $services = Service::orderBy('id', 'DESC')->paginate(20);
        return view('admin.pages.service', compact('services'));
    }

    public function postService(Request $request)
    {
        $this->validate(request(), [
            'service_name'          => 'required',
            'service_description'   => 'required',
        ]);

        $home_active = $request->get('homepage_actived');
        $home_active = isset($home_active) ? 1 : 0;

        if ($request->hasFile('service_icon')) {
            $service_icon = $request->file('service_icon');
            $storedPath = $service_icon->store('public/services');
            $values = [
                'name'              => trim($request->get('service_name')),
                'icon'              => substr($storedPath, strlen('public/')),
                'description'       => trim($request->get('service_description')),
                'homepage_actived'  => $home_active,
            ];
        } else if ($request->hasFile('cover_image')) {
            $cover_image = $request->file('cover_image');
            $storedPath = $cover_image->store('public/services');
            $values = [
                'name'              => trim($request->get('service_name')),
                'cover_image'       => substr($storedPath, strlen('public/')),
                'description'       => trim($request->get('service_description')),
                'homepage_actived'  => $home_active,
            ];
        } else if ($request->hasFile('cover_image') && $request->hasFile('service_icon')) {
            $service_icon = $request->file('service_icon');
            $cover_image = $request->file('cover_image');
            $cover_imagePath = $cover_image->store('public/services');
            $iconPath = $cover_image->store('public/services');
            $values = [
                'name'              => trim($request->get('service_name')),
                'icon'              => substr($iconPath, strlen('public/')),
                'cover_image'       => substr($cover_imagePath, strlen('public/')),
                'description'       => trim($request->get('service_description')),
                'homepage_actived'  => $home_active,
            ];
        } else {
            $values = [
                'name'              => trim($request->get('service_name')),
                'description'       => trim($request->get('service_description')),
                'homepage_actived'  => $home_active,
            ];
        }

        $service = Service::updateOrCreate(['id' => $request->get('id')], $values);
        $message = '"' . $service->name . '" successfully';

        $request->session()->flash('message', $message);

        return back();
    }

    public function getServiceByJson(Request $request)
    {
        $service = Service::find($request->get('id'));
        return response()->json($service);
    }



    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        $message = 'Delete service' . ' ' . $service->name . ' ' . 'successfully !!!';
        return redirect()->route('admin.pages.service')->with(compact('message'));
    }
}
