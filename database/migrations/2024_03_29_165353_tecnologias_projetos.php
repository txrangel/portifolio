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
        Schema::create('tecnologias_projetos', function (Blueprint $table) {
            $table->id()->unique();
            $table->unsignedBigInteger('projeto_id');
            $table->unsignedBigInteger('tecnologia_id');
            $table->timestamps();

            $table->foreign('projeto_id')->references('id')->on('projetos')->onDelete('cascade');
            $table->foreign('tecnologia_id')->references('id')->on('tecnologias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnologias_projetos');
    }
};
