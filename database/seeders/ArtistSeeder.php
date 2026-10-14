<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Optionnel : vider la table avant de la remplir pour éviter les doublons
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Artist::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Liste des artistes à ajouter (utilise celle de ton document)
        $artists = [
            ['firstname'=>'Daniel','lastname'=>'Marcelin'],
            ['firstname'=>'Philippe','lastname'=>'Laurent'],
            ['firstname'=>'Marius','lastname'=>'Von Mayenburg'],
            ['firstname'=>'Olivier','lastname'=>'Boudon'],
            ['firstname'=>'Anne Marie','lastname'=>'Loop'],
            ['firstname'=>'Pietro','lastname'=>'Varasso'],
            ['firstname'=>'Laurent','lastname'=>'Caron'],
            ['firstname'=>'Élena','lastname'=>'Perez'],
            ['firstname'=>'Guillaume','lastname'=>'Baur'],
            ['firstname'=>'Gilles','lastname'=>'Smith'],
        ];

        // Insertion dans la base de données
        foreach ($artists as $artist) {
            Artist::insert([
                'firstname' => $artist['firstname'],
                'lastname' => $artist['lastname'],
            ]);
        }
    }
}
