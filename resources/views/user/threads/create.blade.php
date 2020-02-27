<!DOCTYPE html>
{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.user')

{{-- user.blade.phpの@yield('title')に'スレッドの新規作成画面'を埋め込む --}}
@section('title', 'スレッドの新規作成画面')

{{-- user.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>スレッド新規作成</h2>
                    
                    <form action="{{ action('User\ThreadsController@create') }}" method="post" enctype="multipart/form-data">
                    
                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                        
                        <div class="form-group row">
                            <label class="col-md-2">カテゴリー</label>
                            <select class="col-md-10" id="ategory_id">
                              <option value="1">メンタルクリニック</option>
                              <option value="2">ホルモン治療・手術</option>
                              <option value="3">仕事・就活</option>
                              <option value="4">妊活</option>
                              <option value="5">その他</option>
                            </select>
                        </div>    
                        
                        <div class="form-group row">
                            <label class="col-md-2">タイトル</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-2">本文</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="body" rows="10">{{ old('body') }}</textarea>
                            </div>
                        </div>
                        
                        <!--<div class="form-group row">-->
                        <!--    <label class="col-md-2">画像</label>-->
                        <!--    <div class="col-md-10">-->
                        <!--        <input type="file" class="form-control-file" name="image">-->
                        <!--    </div>-->
                        <!--</div>-->
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="投稿">
                    
                    </form>
                </div>
            </div>
        </div>
    @endsection