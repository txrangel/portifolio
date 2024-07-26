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
        Schema::create('certificados', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name', 60);
            $table->string('sender', 100);
            $table->string('resume', 250);
            $table->string('duration', 4);
            $table->string('link', 250)->unique();
            $table->string('path', 250)->unique();
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
        Schema::dropIfExists('certificados');
    }
};
