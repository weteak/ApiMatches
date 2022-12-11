<?php

namespace App\Http\Controllers;
use App\Models\Matches;
use Illuminate\Http\Request;

class MatchesApi extends Controller
{
    public function getMatches()
    {
        $bundesliga_matches=Matches::all();

        if($bundesliga_matches)
        {
            return response()->json([
                "Bundesliga-Season-2020-2021" =>$bundesliga_matches,
                "status"=>200
            ]);
        }
        else
        {
            return response()->json([
                "messagge" =>'No data',
                "status"=>404
            ]);
        }
      
    }
}
