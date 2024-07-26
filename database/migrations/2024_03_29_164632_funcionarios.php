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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name', 60);
            $table->string('email')->unique();
            $table->string('office', 60);
            $table->string('tel', 13)->unique();
            $table->string('message_whatsapp', 80);
            $table->string('github', 250)->unique();
            $table->string('linkedin', 250)->unique();
            $table->string('cv_path', 250)->unique();
            $table->string('photo_path', 250)->unique();
            $table->text('resume');
            $table->text('resume_home');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
