<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id'); //投稿者のIDを保存するカラム
            $table->bigInteger('category_id'); //カテゴリーを保存するカラム
            
            $table->string('title'); //スレッドのタイトルを保存するカラム
            $table->string('body'); //スレッドの本文を保存するカラム
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     
     //モデルの関連付け
    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
