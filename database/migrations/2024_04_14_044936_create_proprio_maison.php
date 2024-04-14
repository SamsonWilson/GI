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
        Schema::create('proprio_maison', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_de_proprio');
            $table->foreignId('proprietaire_id')->constrained('proprietaires');
            $table->foreignId('maison_id')->constrained('maison');
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('logements', function (Blueprint $table) {
            $table->dropForeign('proprietaire_id');
            $table->dropForeign('maison_id');
        });
        Schema::dropIfExists('proprio_maison');
    }
};
