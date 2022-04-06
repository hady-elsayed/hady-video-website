<?php

namespace App\Http\Controllers\BackEnd;


use App\Http\Requests\BackEnd\Videos\Store;
use App\Http\Requests\BackEnd\Videos\Update;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Video;
use Illuminate\Support\Str;


class VideoController extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Video::with('category','user')->paginate(10);
        return view('back-end.videos.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $skills =Skill::get();


        return view('back-end.videos.create',compact('categories','skills'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {

        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'),$fileName);
        $requestArr = $request->all();
        $requestArr['user_id']= auth()->id();
        $requestArr['image'] = $fileName;

        $row= Video::create($requestArr);

        if (isset($requestArr['skills']) && !empty($requestArr['skills'])){
           $row->skills()->sync($requestArr['skills']);
        }

//        $row = Video::create([
//            'user_id' => auth()->id(),
//            'image' => $fileName,
//            'name' => $request->name,
//            'meta_keywords' => $request->meta_keywords,
//            "youtube" => $request->youtube,
//            "published" => $request->published,
//            "cat_id" => $request->cat_id,
//            "meta_des" => $request->meta_des,
//            "des" => $request->des,
//        ]);


        return redirect()->route('videos.index');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $rows = Video::FindOrFail($id);
        $categories = Category::get();
        $skills =Skill::get();


        return view('back-end.videos.edit',compact('rows','categories','skills'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update($id , Update $request){

        $rows = Video::FindOrFail($id);

        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'),$fileName);
        $requestArr = $request->all();
        $requestArr['image'] = $fileName;

        $rows -> update($requestArr);

        if (isset($requestArr['skills']) && !empty($requestArr['skills'])){
            $rows->skills()->sync($requestArr['skills']);
        }

        return redirect()->route('videos.index',compact('rows'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id){

        Video::FindOrFail($id)->delete();

        return redirect()->route('videos.index');

    }
}
