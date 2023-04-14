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
        Schema::create('formation', function (Blueprint $table) {
            $table->id();
          
            $table->string("name");
            $table->string("description");
            $table->string("image");
            $table->string("niveau");
            $table->date("date_1");
            $table->date("date_2");
 
            $table->unsignedBigInteger("maitre_id");
         
          
            $table->timestamps();

            $table->foreign('maitre_id')->references('id')->on('users');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formation');
    }
};
