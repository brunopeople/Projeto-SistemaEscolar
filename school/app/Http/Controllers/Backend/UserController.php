<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserView(){
      
        //$allData = User::all();

        $data['allData'] = User::all();
        $data['asdf'] = crm::all();
        return view('backend.user.view_user', $data);
    }
}
