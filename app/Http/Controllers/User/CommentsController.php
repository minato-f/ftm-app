<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    //
   public function create()
  {
      return view('user.comments.create');
  }
  
   public function edit()
  {
      return view('user.comments.edit');
  }
    
    
}
