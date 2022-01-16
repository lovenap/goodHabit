<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();    //unsigned()型で定義
            //'user_id' は 'Usersテーブル' の 'id' を参照する外部キーです
            $table->date('period_from'); //　期間の始まり
            $table->date('period_until'); //　期間の終わり
            $table->integer('item_number'); // item(項目)数
            $table->integer('achievement_number'); // 項目の達成数
            $table->boolean('openness')->default(false); //公開性　true = 公開　　false = 非公開
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
        Schema::dropIfExists('sheets');
    }
}
