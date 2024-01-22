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
        Schema::create('logement', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('photo');
            $table->foreignId('quartier_id')->constrained('quatiers');
            $table->foreignId('typelogement_id')->constrained('typelogement');
            $table->foreignId('utilisateur_id')->constrained('utilisateur');
            $table->timestamps();

        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('logement',function(Blueprint $table) {
            $table->dropForeign('utilisateur_id');
            $table->dropForeign('quatier_id');
            $table->dropForeign('typelogement_id');

        });
        Schema::dropIfExists('logement');
    }
};