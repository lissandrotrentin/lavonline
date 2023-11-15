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
        Schema::create('washings', function (Blueprint $table) {
            $table->id();
            $table->string('nome_fantasia');
            $table->string('rua');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('cidade');
            $table->string('cep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('washings');
    }
};
