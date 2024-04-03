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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('date_payement');
            $table->string('mois_payer');
            $table->foreignId('mode_payement_id')->constrained('mode_payements');
            $table->foreignId('location_id')->constrained('locations');
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
            $table->dropForeign('mode_payement_id');
            $table->dropForeign('location_id');
        });
        Schema::dropIfExists('factures');
    }
};