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
        Schema::create('visites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients');
            $table->foreignId('logement_id')->constrained('logements');
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('visites', function (Blueprint $table) {
            $table->dropForeign('client_id');
            $table->dropForeign('logement_id');
        });
        Schema::dropIfExists('visites');
    }
};
