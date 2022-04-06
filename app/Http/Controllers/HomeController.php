<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Skill;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $videos = Video::paginate(30);
        return view('home',compact('videos'));
    }

    public function category($id){

        $category = Category::findOrFail($id);
        $videos = Video::get()->where('cat_id',$id);
        return view('front-end.category.index',compact('category','videos'));
    }

    public function skill($id){

        $skill = Skill::with('videos')->findOrFail($id);
        return view('front-end.skill.index',compact('skill'));
    }

    public function video($id){

        $video = Video::findOrFail($id);

        return view('front-end.video.index',compact('video'));
    }
}
