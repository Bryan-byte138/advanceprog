<?php

namespace App\Http\UserController;

use Illuminate\http\request;

class UserController extends UserController
{
    public function index()(
        return view('user_index');
    )
    public function create()(
        return view('user_index');
    )
    public function store(Request $request)(
        return $request->all();
    )
    public function store(Request $request)(
        return $request->all();
    )
    public function show(string $id)(
        return view('use_show',data)
    )
        
        
        

}
