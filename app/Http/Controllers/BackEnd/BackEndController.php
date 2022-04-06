<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;


class BackEndController extends Controller{
    /**
    protected $model;

    public function __construct(Model $model)
    {
        $this -> model=$model;
    }

    public function index(){
        $rows = $this->model->paginate(10);

        return view('back-end.users.index',compact('rows'));
    }

    protected function getClassNameFromModel(){
        return Str::plural(strtolower(class_basename($this->model)));
    }
    **/
}