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
            $table->string('Name')->nullable();
            $table->string('Address')->nullable();
            $table->string('Star_rating')->nullable(); 
            $table->string('Price_nomal')->nullable();
            $table->string('Price_sale')->nullable();
            $table->longText('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('avatar')->nullable();
            $table->string('images')->nullable();
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
