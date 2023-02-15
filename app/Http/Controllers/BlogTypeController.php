<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeBlog;

class BlogTypeController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:blog-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:blog-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $types = TypeBlog::paginate(20);
        return view('admin.pages.blog_type', compact('types'));
    }

    public function postType(Request $request)
    {
        $this->validate(request(), [
            'type_name'        => 'required',
        ]);

        $values = [
            'name'             => trim($request->get('type_name')),
        ];

        $type = TypeBlog::updateOrCreate(['id' => $request->get('id')], $values);
        $message = '"' . $type->name . '" successfully';

        $request->session()->flash('message', $message);

        return back();
    }

    public function getTypeByJson(Request $request)
    {
        $type = TypeBlog::find($request->get('id'));
        return response()->json($type);
    }


    public function deleteType($id)
    {
        $type = TypeBlog::findOrFail($id);
        $type->delete();
        $message = 'Delete type' . ' ' . $type->name . ' ' . 'successfully !!!';
        return redirect()->route('admin.pages.blog_type')->with(compact('message'));
    }
}
