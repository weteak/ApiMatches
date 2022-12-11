<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matches;
use File;


class BundesligaMatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/seeders/db-json/bundesliga-2021.json");
        $allmatches=json_decode($json,true);     
         foreach ($allmatches as $match) {
         Matches::query()->updateOrCreate([
             'Round'=>$match['Round'],
             'Date'=>$match['Date'],
             'Team 1'=>$match['Team 1'],
             'FT'=>$match['FT'],
             'Team 2'=>$match['Team 2'],
         ]);
 
     }
    }
}
