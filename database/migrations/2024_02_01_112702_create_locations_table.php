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
            $table->string('date_finavance');
            $table->string('commision');
            $table->string('date_fin')->nullable();
            $table->string('descrip_prelevement')->nullable();
            $table->string('Mt_prelever')->nullable();
            $table->string('Mt_rembouser')->nullable();
            $table->string('DJregler')->nullable();
            $table->string('avance');
            $table->string('caution');
            $table->string('Tcaution');
            $table->string('Tavance');
            $table->string('total');
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
