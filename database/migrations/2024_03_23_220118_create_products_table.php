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
            $table->string('name');
            $table->text('description');
            $table->date('best_before'); //comprobar que sea date
            $table->double('price');
            $table->tinyInteger('quantity');
            $table->string('location');
            $table->string('main_image');
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
