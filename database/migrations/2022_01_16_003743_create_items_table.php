<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sheet_id')->unsigned();    //unsigned()型で定義
            //'sheet_id' は 'Sheetsテーブル' の 'id' を参照する外部キーです
            $table->string('content'); // 項目内容
            $table->boolean('achievement')->default(false); //true = 達成　　false = 未達成
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
