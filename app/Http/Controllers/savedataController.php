<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use Illuminate\Support\Facades\Request;

use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Support\Facades\Validator;
// use App\Http\Controllers\savedataController;


class savedataController extends Controller {

    public function save() {

        $LeaderTeam = $_POST["team_leader"];
        echo "Leader) " .$LeaderTeam." +++++++ ----------------- \n" ;
        $numberInputFinal = $_POST["numberInputFinal"];
        echo "++++ Number Member ) " .$numberInputFinal." +++++++ ----------------- \n\n\n" ;

        for ($i=1; $i <= $numberInputFinal ; $i++) {
            # code...
            $numstr= str($i);
            //  $ValInsert = $_POST["".$i.""];
             $ValInsert = $_POST["".$numstr.""];




             echo $i.") " .$ValInsert."  --- " ;



             

        }

    }
}

