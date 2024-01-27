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
        Schema::create('quatiers', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->text('description');
            $table->string('imagequartier');
            $table->foreignId('ville_id')->constrained('villes');
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        schema::table('quatiers', function (Blueprint $table) {
            $table->dropForeign('ville_id');
        });
        Schema::dropIfExists('quatiers');
    }
};
