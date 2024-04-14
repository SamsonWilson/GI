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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adress');
            $table->string('tel1');
            $table->string('tel2');
            $table->string('email');
            $table->string('sexe');
            // $table->foreignId('typeclient_id')->constrained('type_clients');
            $table->foreignId('typeclient_id')->nullable()->constrained('type_clients');
            // $table->foreignId('typeclient_id')->constrained('type_clients')->default('Visite');
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('clients', function (Blueprint $table) {
            $table->dropForeign('typeclient_id');
        });
        Schema::dropIfExists('clients');
    }
};
