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
        Schema::create('inscription', function (Blueprint $table) {
            $table->unsignedBigInteger('idetudiant');
            $table->unsignedBigInteger('idcours');
            $table->primary(['idetudiant', 'idcours']);
            $table->string('status');
            $table->foreign('idcours')->references('id')->on('cours')->onDelete('cascade');
            $table->foreign('idetudiant')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription');
    }
};
