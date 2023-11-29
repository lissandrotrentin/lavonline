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
        Schema::create('mark_washings', function (Blueprint $table) {
            $table->id();
            $table->string('dia');
            $table->string('horario_retirada');
            $table->string('horario_entrega');
            $table->string('observacao')->nullable();
            $table->integer('id_washing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mark_washings');
    }
};
