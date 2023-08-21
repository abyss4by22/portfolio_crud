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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string("birthday")->nullable();;
            $table->string("website")->nullable();;
            $table->string("city")->nullable();;
            $table->string("degree")->nullable();;
            $table->string("email")->nullable();;
            $table->string("freelance")->nullable();;
            $table->integer("age")->nullable();;
            $table->integer("phone")->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
