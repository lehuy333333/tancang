<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Project;
use App\Models\GlobalSetting;


class SettingController extends Controller
{
    //
    public function index()
    {
        $settings = GlobalSetting::paginate(20);
        return view('admin.pages.setting', compact('settings'));
    }

    public function postSetting(Request $request)
    {

        if ($request->get('is_image')) {
            // Nếu không thì in ra thông báo
            $img = $request->file('setting_value');
            $storedPath = $img->store('public/settings');
            $values = [
                'value'             => substr($storedPath, strlen('public/')),
            ];
        } else {
            $values = [
                'value'             => $request->get('setting_value'),
            ];
        }

        $setting = GlobalSetting::updateOrCreate(['id' => $request->get('id')], $values);
        $message = '"' . $setting->key . '" successfully';

        $request->session()->flash('message', $message);

        return back();
    }

    public function getSettingByJson(Request $request)
    {
        $setting = GlobalSetting::find($request->get('id'));
        return response()->json($setting);
    }
}
