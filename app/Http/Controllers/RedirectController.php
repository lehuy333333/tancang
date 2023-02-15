<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\TypeBlog;
use App\Models\Project;
use App\Models\GlobalSetting;

class RedirectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::where('homepage_actived', '1')->get();
        $services = Service::where('homepage_actived', '1')->get();
        $blogs = Blog::where('type_id', 1)->orderBy('id', 'DESC')->skip(0)->take(3)->get();
        $settings = GlobalSetting::all();
        return view('home', compact('projects', 'services', 'blogs', 'settings'));
    }

    public function introduce()
    {
        return view('user.pages.introduce');
    }

    public function projects()
    {
        $projects = Project::orderBy('id', 'DESC')->paginate(12);
        // dd($projects);
        return view('user.pages.projects', compact('projects'));
    }

    public function projectDetail($id)
    {
        $project = Project::find($id);
        return view('user.pages.project-detail', compact('project',));
    }

    public function services()
    {
        $services = Service::all();
        return view('user.pages.services', compact('services'));
    }

    public function serviceDetail($id)
    {
        $service = Service::find($id);
        $services = Service::all();
        return view('user.pages.service-detail', compact('service', 'services'));
    }

    public function blogs()
    {
        $blogs = Blog::where('type_id', 1)->orderBy('id', 'DESC')->paginate(9);
        return view('user.pages.blogs', compact('blogs'));
    }

    public function blogDetail($id)
    {
        $blog = Blog::find($id);
        return view('user.pages.blog-detail', compact('blog'));
    }

    public function shareholderBlogs()
    {
        $blogs = Blog::where('type_id', '!=', 1)->orderBy('id', 'DESC')->paginate(9);
        $blog_types = TypeBlog::where('id', '!=', 1)->get();
        return view('user.pages.shareholder-blogs', compact('blogs', 'blog_types'));
    }

    public function shareholderBlogsByType($id)
    {
        $blogs = Blog::where('type_id', $id)->orderBy('id', 'DESC')->paginate(9);
        $blog_types = TypeBlog::where('id', '!=', 1)->get();
        return view('user.pages.shareholder-blogs', compact('blogs', 'blog_types'));
    }

    public function shareholderBlogDetail($id)
    {
        $blog = Blog::find($id);
        $blog_types = TypeBlog::where('id', '!=', 1)->get();
        return view('user.pages.shareholder-blog-detail', compact('blog', 'blog_types'));
    }

    public function contact()
    {
        return view('user.pages.contact');
    }

}
