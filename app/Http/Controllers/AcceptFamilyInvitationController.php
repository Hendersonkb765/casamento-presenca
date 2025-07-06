<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;
use App\Services\InvitationService;

class AcceptFamilyInvitationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,$tokenFamily)
    {
        

        $data = $request->except('_token');
        $family = Family::where('token',$tokenFamily)->first();
        if(count($data)==0){
            
            $family->guests()->update(['confirmed'=>false]);
            return redirect()->route('declined');
            
        }
        
        $guest = (new InvitationService()->toAcceptFamily($data,$family));
        

        
    

        return redirect()->route('confirmed',$guest->token);
    }
}
