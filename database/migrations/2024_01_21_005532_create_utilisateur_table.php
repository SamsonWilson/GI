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
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adress');
            $table->integer('tel');
            $table->string('photo');
            $table->foreignId('typetilisateur_id')->constrained('_typeutilisateur');
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('utilisateur',function(Blueprint $table) {
            $table->dropForeign('typeutilisateur_id');

        });
        Schema::dropIfExists('utilisateur');
    }
};