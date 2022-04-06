<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\skills\Store;
use App\Http\Requests\BackEnd\skills\Update;
use App\Models\Skill;

class SkillController extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Skill::paginate(10);
        return view('back-end.skills.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.skills.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        Skill::create(request()->all());
        return redirect()->route('skills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

    $rows = Skill::FindOrFail($id);

    return view('back-end.skills.edit',compact('rows'));

}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update($id , Update $request){

        $rows = Skill::FindOrFail($id);

        $rows -> update(request()->all());

        return redirect()->route('skills.index',compact('rows'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id){
        Skill::FindOrFail($id)->delete();
        return redirect()->route('skills.index');

    }
}
