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
        Schema::create('projetos', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name', 30);
            $table->string('resume', 65);
            $table->text('description');
            $table->string('link', 250)->unique();
            $table->string('url_post', 250)->unique();
            $table->string('url_repository', 250)->unique();
            $table->string('photo_path', 250)->nullable();
            $table->string('photo_min_path', 250)->nullable();
            $table->string('video_path', 250)->nullable();
            $table->unsignedBigInteger('funcionario_id');
            $table->timestamps();

            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projetos');
    }
};
