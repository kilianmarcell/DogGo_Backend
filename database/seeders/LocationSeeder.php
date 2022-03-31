<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Location::factory(15)->create();

        \App\Models\Location::factory()->create([
            'name' => 'McDonald\'s - Keleti',
            'description' => 'Gyors kiszolgálás, sok ember számára is elég nagy a hely, kiskedvenceink is jól érezték magukat, csendes volt a hely.',
            'lat' => 47.5008947,
            'lng' => 19.0819858,
            'allowed' => false,
            'user_id' => 3,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Burger King - Keleti',
            'description' => 'Kedves pultosok, nem a leghangosabb hely, kellemes az atmoszférája a helynek, ahhoz képest, hogy a belvárosban van!',
            'lat' => 47.5008272,
            'lng' => 19.0817936,
            'allowed' => false,
            'user_id' => 3,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'KFC Budapest - Keleti',
            'description' => 'Húzták a szájukat, de beengedtek minket kutyával. Az állatokat nem szolgálják ki kajával, nem adnak nekik vizet sem.',
            'lat' => 47.5014546,
            'lng' => 19.0831529,
            'allowed' => true,
            'user_id' => 4,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Pesti Pipi - Keleti',
            'description' => 'Kellemes volt itteni időtöltésem, külön tálban adtak a kutyáinknak vizet, nagyon jó munkát végeznek az ott dolgozók.',
            'lat' => 47.5012856,
            'lng' => 19.0827999,
            'allowed' => true,
            'user_id' => 4,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Kutya Egy Hely kávézó/bár/kutya napközi',
            'description' => 'Nagyon kedves volt minenki, mindent érthetően le tudtunk beszélni, minden rendben volt a rendeléssel, a kiskedvencünk is megfelelő ellátást kapott!',
            'lat' => 47.5060349,
            'lng' => 19.07362,
            'allowed' => false,
            'user_id' => 5,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Városliget',
            'description' => 'Gyönyörű hely, sok kutyás ember jár erre, kutyáknak külön elkerített részek vannak, családos embereknek bátran tudom ajánlani ezt a helyet!',
            'lat' => 47.51436501, 
            'lng' => 19.08524642,
            'allowed' => true,
            'user_id' => 3,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Normafa',
            'description' => 'A város zaja egyeltalán nem hallatszódik, olyan mintha nem is Budapesten lennék, teljesen elvarázsol ez a hely!',
            'lat' => 47.5066425292158,
            'lng' => 18.961865246036687,
            'allowed' => false,
            'user_id' => 4,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Margit-sziget',
            'description' => 'Kellemes élmény volt körbesétálni a szigetet. Több helyen is megálltunk, számtalan hely alkalmas a kutyafuttatásra, piknikezésre, mindenkinek tudom ajánlani!',
            'lat' => 47.526773338102664,
            'lng' => 19.04641313900643,
            'allowed' => false,
            'user_id' => 1,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Naplás-tó',
            'description' => 'Nagyon nyugodt hely, egy délutáni sétára tökéletes hely. A közelben a dombokon is lehet sétálni, az extrémebb biciklizésre is tökéletes hely.',
            'lat' => 47.50911699363903, 
            'lng' => 19.24720391573441,
            'allowed' => false,
            'user_id' => 5,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Népliget',
            'description' => 'Kellemes csalódást okozott ez a hely, a kicsit hangos háttérzaj ellenére kellemes időt tudtam eltölteni családommal itt.',
            'lat' => 47.481421467218205,
            'lng' => 19.10947361517664,
            'allowed' => false,
            'user_id' => 4,
        ]);
    }
}
