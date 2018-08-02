<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->float('price');
            $table->unsignedInteger('quantity');
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('color')->nullable();
            $table->string('rom')->nullable();
            $table->string('ram')->nullable();
            $table->string('memory_stick')->nullable();
            $table->string('os')->nullable();
            $table->string('camera')->nullable();
            $table->string('battery')->nullable();
            $table->unsignedInteger('category_id');
            $table->tinyInteger('is_active')->default(0);
//            $table->foreign('category_id')->refrences('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
}
