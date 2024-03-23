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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('user_producer_id');
            $table->foreign('user_producer_id')->references('id')->on('users')->where('role_id', '=', 3);
            $table->string('product_name');
            $table->text('product_description');
            $table->date('product_best_before'); //comprobar que sea date
            $table->double('product_price');
            $table->tinyInteger('product_quantity');
            $table->string('product_location');
            $table->string('product_main_image');
            $table->enum('status', ['Available', 'Unavailable'])->default('Available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
