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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
          
            $table->string("name");
            $table->string("description");
            $table->string("image");
            $table->string("niveau");
            $table->string("date_1");
            $table->string("date_2");
            $table->string("date_3");
            $table->unsignedBigInteger("maitre_id");
            $table->unsignedBigInteger("matiere_id");
          
            $table->timestamps();

            $table->foreign('maitre_id')->references('id')->on('users');
            $table->foreign('matiere_id')->references('id')->on('matiere');
           
        });}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
