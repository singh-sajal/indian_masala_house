<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name')->nullable();
            $table->foreignId('category_id')->nullable()->references('id')->on('categories')->onDelete('cascade');
            $table->string('description')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('status')->default(0);
            $table->string('full_price')->nullable();
            $table->string('half_price')->nullable();
            $table->boolean('is_starter')->default(0);
            $table->string('allergens')->nullable();
            $table->longText('data')->nullable();
            $table->json('attribute')->nullable();
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
        Schema::dropIfExists('menus');
    }
};
