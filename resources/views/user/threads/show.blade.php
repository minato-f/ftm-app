<!DOCTYPE html>
{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.user')

{{-- user.blade.phpの@yield('title')に'スレッドの新規作成画面'を埋め込む --}}
@section('title', 'スレッドの詳細画面')

{{-- user.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="blue-card">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">{{ $thread->category->name }}</div>　
        <div class="card-body">
          <h5 class="card-title">{{ \Str::limit($thread->title) }}</h5>
          <p class="card-name">{{ $thread->user->name }}</p>
          <p class="card-text">{{ \Str::limit($thread->body) }}</p>
        </div>
      </div>
    </div>
    
    
@endsection