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
      return redirect ('user/threads/index');
  }
  
    public function index(Request $request)
  {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $thread = Thread::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $thread = Thread::all();
          // $category = Category::all();
      }
      return view('user.threads.index', ['threads' => $thread, 'cond_title' => $cond_title]);
  
  }
  
  
   public function edit()
  {
      return view('user.threads.edit');
  }
  
  public function show(Thread $thread)
  {
    $thread->load('caregory', 'user');
    return view ('user.threads.show', ['thread' => $thread]);
  }
  
  
    
}
