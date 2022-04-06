<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;

use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\BackEnd\categories\store;
use App\Http\Requests\BackEnd\categories\Update;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Category::paginate(10);
        return view('back-end.categories.index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(store $request)
    {
        // al validation fe al request/store

        $requestArray = request()->all();

        Category::create($requestArray);

        return redirect()->route('categories.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function edit($id){

        $rows = Category::FindOrFail($id);

        return view('back-end.categories.edit',compact('rows'));

    }

    public function update($id , Update $request){

        $rows = Category::FindOrFail($id);

        $rows -> update(request()->all());

        return redirect()->route('categories.index',compact('rows'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');

    }
}
