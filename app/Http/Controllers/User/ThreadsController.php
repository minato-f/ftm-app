<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでThread Modelが扱えるようになる
use App\Thread;
use Illuminate\Support\Facades\Auth;


class ThreadsController extends Controller
{
     public function add()
  {
      return view('user.threads.create');
  }
    
  
   public function create(Request $request)
  {
      // Varidationを行う
      $this->validate($request, Thread::$rules);
      
      $thread = new Thread;
      $form = $request->all();
      
      unset($form['_token']);        
      
      //データベースに保存
      $thread->fill($form);
      $thread->user_id = Auth::id();
      $thread->save();
      
      return view('user.threads.create');
  }
  
    public function index()
  {
      return view('user.threads.index');
  }
  
  
   public function edit()
  {
      return view('user.threads.edit');
  }
    
}
