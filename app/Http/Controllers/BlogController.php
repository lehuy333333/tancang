<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\TypeBlog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
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
        $blogs = Blog::orderBy('id', 'DESC')->paginate(20);
        $types = TypeBlog::all();
        return view('admin.pages.blog', compact('blogs', 'types'));
    }

    public function postBlog(Request $request)
    {
        dd($request);
        $this->validate(request(), [
            'blog_title'        => 'required',
            'blog_content'      => 'required',
        ]);

        $content = trim($request->get('blog_content'));
        
        $author_id = Auth::user()->id;

        if ($request->hasFile('cover_image')) {
            $cover_image = $request->file('cover_image');
            $storedPath = $cover_image->store('public/blogs');
            $values = [
                'title'             => trim($request->get('blog_title')),
                'cover_image'       => substr($storedPath, strlen('public/')),
                'content'           => trim($request->get('blog_content')),
                'type_id'           => $request->get('type_id'),
                'user_id'           => $author_id,
            ];
        } else {
            $values = [
                'title'             => trim($request->get('blog_title')),
                'content'           => trim($request->get('blog_content')),
                'type_id'           => $request->get('type_id'),
                'user_id'           => $author_id,
            ];
        }


        $blog = blog::updateOrCreate(['id' => $request->get('id')], $values);
        $message = '"' . $blog->title . '" successfully';

        $request->session()->flash('message', $message);

        return back();
    }

    public function getBlogByJson(Request $request)
    {
        $blog = Blog::find($request->get('id'));
        return response()->json($blog);
    }



    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        $message = 'Delete blog' . ' ' . $blog->name . ' ' . 'successfully !!!';
        return redirect()->route('admin.pages.blog')->with(compact('message'));
    }
}
