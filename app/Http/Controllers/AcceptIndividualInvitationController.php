<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InvitationService;

class AcceptIndividualInvitationController{

    function __invoke(Request $request){
        $data = $request->except('_token');
        if(reset($data) == 'no'){
            (new InvitationService())->toDenySingle(array_keys($data)[0]);
            return redirect()->route('declined');
        }
        $guest = (new InvitationService())->toAcceptSingle(array_keys($data)[0]);

        return redirect()->route('confirmed',$guest->token);
    }
}