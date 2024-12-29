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
            $table->uuid('id_product')->primary()->default(Str::uuid());
            $table->uuid('id_merchant');
            $table->string('name_product')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('category')->nullable();
            $table->string('picture_1')->nullable();
            $table->string('picture_2')->nullable();
            $table->string('picture_3')->nullable();
            $table->string('picture_4')->nullable();
            $table->string('picture_5')->nullable();
            $table->boolean('is_delete')->default(false);
            $table->timestamps();

            $table->foreign('id_merchant')->references('id_merchant')->on('merchants')->onDelete('cascade');
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
