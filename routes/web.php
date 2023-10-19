<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTypeController;
use App\Http\Controllers\SettingController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/***************************Website****************************************/
Route::get('/', [RedirectController::class, 'index'])->name('homepage');

Route::get('/page', function () {
    return view('main');
});

Route::get('/introduce', [RedirectController::class, 'introduce'])->name('home_introduce');
Route::get('/vision', [RedirectController::class, 'vision'])->name('home_vision');
Route::get('/organization', [RedirectController::class, 'organization'])->name('home_organization');
Route::get('/projects', [RedirectController::class, 'projects'])->name('home_projects');
Route::get('/project/{id}', [RedirectController::class, 'projectDetail']);

Route::get('/blogs', [RedirectController::class, 'blogs'])->name('home_blogs');
Route::get('/blog/{id}', [RedirectController::class, 'blogDetail']);

Route::get('/shareholder_blogs', [RedirectController::class, 'shareholderBlogs'])->name('home_blogs');
Route::get('/shareholder_blog/{id}', [RedirectController::class, 'shareholderBlogDetail']);
Route::get('/shareholder_blog/type/{id}', [RedirectController::class, 'shareholderBlogsByType']);

Route::get('/contact', [RedirectController::class, 'contact'])->name('home_contact');
Route::get('/services', [RedirectController::class, 'services'])->name('home_services');
Route::get('/service/{id}', [RedirectController::class, 'serviceDetail']);


/*********************************Admin**********************************/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [UserController::class, 'getLogin'])->name('getLogin');
    Route::post('/login',  [UserController::class, 'postLogin'])->name('postLogin');
    Route::get('/logout', [UserController::class, 'getLogout'])->name('getLogout');

    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/roles', [RoleController::class, 'index'])->name('roles');
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions');

    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::post('/project/post', [ProjectController::class, 'postProject']);
    Route::post('/project/getjson', [ProjectController::class, 'getProjectByJson']);

    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::post('/service/post', [ServiceController::class, 'postService']);
    Route::post('/service/getjson', [ServiceController::class, 'getServiceByJson']);

    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    Route::post('/blog/post', [BlogController::class, 'postBlog']);
    Route::post('/blog/getjson', [BlogController::class, 'getBlogByJson']);

    Route::get('/blog_types', [BlogTypeController::class, 'index'])->name('blog_types');
    Route::post('/blog_type/post', [BlogTypeController::class, 'postType']);
    Route::post('/blog_type/getjson', [BlogTypeController::class, 'getTypeByJson']);

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::post('/setting/post', [SettingController::class, 'postSetting']);
    Route::post('/setting/getjson', [SettingController::class, 'getSettingByJson']);
});
