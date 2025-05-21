<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->id();
            $table->string('sampleId')->unique();   //樣本編號
            $table->integer('quesId')->unique();    //受訪編號
            $table->string('sampleName')->nullable();   //姓名
            $table->tinyInteger('gender');  //性別
            $table->year('birthYear');  //出生年
            $table->tinyInteger('birthMonth')->nullable();  //出生月
            $table->tinyInteger('status')->default(1); //訪問狀態
            $table->tinyInteger('mail')->default(1);    //是否可寄信
            $table->tinyInteger('mode')->default(1);    //預設訪問途徑
            $table->string('liCode');   //訪問歸屬村里
            $table->unsignedBigInteger('mainAdd'); //主地址Id
            $table->unsignedBigInteger('mailAdd')->default(0);
            $table->unsignedBigInteger('emailFirst')->default(0);
            $table->unsignedBigInteger('imFirst')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samples');
    }
};
