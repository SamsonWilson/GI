<?php

namespace Database\Seeders;

use App\Models\Ville;
use Database\Factories\villeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class VilleTableseeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // DB::table('ville')->insert([
        //     'nom'=> str::random(10),
        //     'description'=>str::random(10),
        // ]);

        Ville::factory()->create();
    }
}