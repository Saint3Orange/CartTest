<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Таблица ТОВАРЫ
     * 'name'
     * 'description'
     * 'image'
     * 'price'
     * 'discount' Скидка
     * 'feature' Характеристики
     * 'application' Применение
     * 'compound' Состав
     * 'purchase method' способ продажи 0 - Опт 1 - розница
     * 'contraindications' противопоказания
     * 'category' категория
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->string('name');
            $table->text('description')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
