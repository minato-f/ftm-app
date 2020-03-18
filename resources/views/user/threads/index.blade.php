<!DOCTYPE html>
{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.user')

{{-- user.blade.phpの@yield('title')に'掲示板のIndex画面'を埋め込む --}}
@section('title', '掲示板のIndex画面')

@section('content')

{{-- スライドの部分 --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="mx-auto d-block w-50" src="{{ secure_asset('img/slide01.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block w-50" src="{{ secure_asset('img/slide02.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="mx-auto d-block w-50" src="{{ secure_asset('img/slide03.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

{{-- サイト説明の部分 --}}
<div class="about_this_website">
  <h5>FTM AppはFTMに関する情報や困りごとを共有するサイトです。</h5>
  <h5></h5>
</div>


{{-- カードの部分 --}}
<div class="container container-m">
  <div class="card-deck">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>




{{-- 青のカードの部分 --}}

<form action="{{ action('User\ThreadsController@index') }}" method="get">
    @foreach($threads as $thread)  
<div class= "row">
  <div class="col-sm-4">    
    <div class="blue-card">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">{{ $thread->category->name }}</div>　
        <div class="card-body">
          <h5 class="card-title">{{ \Str::limit($thread->title) }}</h5>
          <p class="card-name">{{ $thread->user->name }}</p>
          <p class="card-text">{{ \Str::limit($thread->body) }}</p>
          <a href="#" class="btn btn-primary" class="float-right">さらに詳しく</a>
        </div>
      </div>
    </div>
  </div>
</div>
    @endforeach




{{ csrf_field() }}

@endsection   


