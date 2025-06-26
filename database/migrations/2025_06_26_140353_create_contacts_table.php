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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Contact name');
            $table->string('phone', 9)->comment('Number of contact');
            $table->string('email')->unique()->comment('Email of contact');
            $table->text('notes')->nullable()->comment('Note of contact');
            $table->unsignedBigInteger('user_id')->nullable()->comment('Qual usuário está vinculado');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
