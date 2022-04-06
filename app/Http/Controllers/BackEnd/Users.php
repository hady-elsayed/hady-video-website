<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;

use App\Http\Controllers\BackEnd;
use App\Http\Requests\BackEnd\Users\Store;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class Users extends BackEndController
{
    public function index(){
        $rows = User::latest()->paginate(10);
        return view('back-end.users.index',compact('rows'));
    }

    public function create(){

        return view('back-end.users.create');

    }
    public function store(Store $request){

        // al validation fe al request/store

        $requestArray = request()->all();
        $requestArray ['password'] = Hash::make($requestArray ['password']);

        User::create($requestArray);

        return redirect()->route('users.index');
    }
    /*
     detare2a t3ml byha al validation gwa al controller
     public function store(Request $request){
                $request = validate([
                    'name' => ['required', 'string', 'max:191'],
                     'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
                     'password' => ['required', 'string', 'min:8'],
                                     ]};
            $requestArray =$request->all();
            $requestArray ['password'] = Hash::make($requestArray ['password']);
            User::created($requestArray);

        return redirect()->route('users.index');
    }
     */

    public function edit($id){

        $rows = User::FindOrFail($id);

        return view('back-end.users.edit',compact('rows'));

    }

    public function update($id , Request $request){

        $rows = User::FindOrFail($id);

        $requestArray =[
            'name' => $request->name,
            'email' => $request->email,
            ];

        if (request()->has('password') && request()->get('password') != ''){
            $requestArray =$requestArray+['password' => Hash::make($request->passwords)];
        };


        $rows -> update($requestArray);

        return redirect()->route('users.index',compact('rows'));

    }

    public function destroy ($id){
        User::FindOrFail($id)->delete();
        return redirect()->route('users.index');

    }
}
