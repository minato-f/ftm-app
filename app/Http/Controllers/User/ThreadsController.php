<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでThreads Modelが扱えるようになる
use App\Threads;


class ThreadsController extends Controller
{
    public function index()
  {
      return view('user.threads.index');
  }
  
    public function add()
  {
      return view('user.threads.create');
  }
  
   public function create()
  {
      return view('user.threads.create');
  }
  
  
   public function edit()
  {
      return view('user.threads.edit');
  }
    
}
