<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
       public function create()
  {
      return view('user.user.create');
  }
  
   public function edit()
  {
      return view('user.user.edit');
  }
    
}
