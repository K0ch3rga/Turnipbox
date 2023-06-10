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
            $table->unsignedBigInteger('ean');
            $table->string('name');
            $table->string('manufacturer')->nullable();
            $table->unsignedSmallInteger('massvalue')->nullable();
            $table->enum('masstype', ['г', 'кг', 'мл', 'л',])->nullable();
            $table->string('type')->nullable();
            $table->json('tags')->nullable();
            $table->boolean('edit')->default(true);
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
