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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('date_debut');
            $table->string('date_fin');
            $table->foreignId('logement_id')->constrained('logements');
            $table->foreignId('client_id')->constrained('clients');
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('locations', function (Blueprint $table) {
            $table->dropForeign('logement_id');
            $table->dropForeign('client_id');
        });
        Schema::dropIfExists('locations');
    }
};
