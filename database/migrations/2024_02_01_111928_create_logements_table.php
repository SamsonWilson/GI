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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('photo');
            $table->string('adress');
            $table->string('MT_visite');
            $table->string('surperficie');
            $table->string('mt_logement_par_mois');
            $table->foreignId('quartier_id')->constrained('quartiers');
            $table->foreignId('users_id')->constrained('users');
            $table->foreignId('typelogement_id')->constrained('type_logements');
            $table->foreignId('maison_id')->constrained('maisons');
            $table->boolean('active')->default(false);
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
            $table->dropForeign('quartier_id');
            $table->dropForeign('utilisateur_id');
            $table->dropForeign('typelogement_id');
            $table->dropForeign('maison_id');
        });
        Schema::dropIfExists('logements');
    }
};
