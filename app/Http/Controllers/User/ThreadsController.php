<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでThread Modelが扱えるようになる
use App\Thread;
use Illuminate\Support\Facades\Auth;
use App\Category;


class ThreadsController extends Controller
{
     public function add()
  {
      $categories = Category::all();
      return view('user.threads.create', ['categories' => $categories]);
  }
    
  
   public function create(Request $request)
  {
      // Varidationを行う
      $this->validate($request, Thread::$rules);
      
      $thread = new Thread;
      $form = $request->all();
      //dd($form);
      
      unset($form['_token']);        
      
      //データベースに保存
      $thread->fill($form);
      $thread->user_id = Auth::id();
     // $thread->category_id = 
      $thread->save();
      return redirect ('user.threads.index');
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
