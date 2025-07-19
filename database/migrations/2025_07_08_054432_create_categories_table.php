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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->string('subtitle')->nullable();
            $table->string('description')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('status')->default(1);
            $table->string('serial_no')->nullable();
            $table->longText('data')->nullable();
            $table->longText('attribute')->nullable();
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
        Schema::dropIfExists('categories');
    }
};
