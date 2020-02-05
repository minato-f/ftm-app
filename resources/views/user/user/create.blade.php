<!DOCTYPE html>
{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.user')

{{-- user.blade.phpの@yield('title')に'スレッドの新規作成画面'を埋め込む --}}
@section('title', 'プロフィールの作成画面')

<h2>プロフィール作成画面</h2>

{{-- user.blade.phpの@yield('content')に以下のタグを埋め込む --}}
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>Myプロフィール</h2>
                    
                    <form action="{{ action('User\UserController@create') }}" method="post" enctype="multipart/form-data">
                    
                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                    
                        <div class="form-group row">
                            <label for="">名前:</label>
                            <div class="col-md-10">
                                <input type="text" name="name"/>
                            </div> 
                        </div>
                    
                        <div>
                            <label for="">自己紹介:</label>
                            <textarea class="form-control" name="introduction" rows="5">{{ old('introduction') }}</textarea>
                        </div>
                        <br>
                        
                        {{ csrf_field() }}
                        
                        <input type="submit" class="btn btn-primary" value="作成">
                    
                    </form>
                </div>
            </div>
        </div>
    @endsection



