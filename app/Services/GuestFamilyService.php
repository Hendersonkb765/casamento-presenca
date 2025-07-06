<?php

namespace App\Services;

use App\Models\Guest;

class GuestFamilyService{

    public function getFamilyData(Guest $guest){
        $family = $guest->family;
        $members = Guest::where('family_id',$family->id)->where('confirmed','=',null)->where('id','!=',$guest->id)->get();

        return [
            'family'=>[
                'token'=> $family->token,
                'familyName' =>$family->name,
                'responsibleName'=>$guest->only('id','name','token'),
                'familyMembers'=>$members->map(function ($members){
                    return $members->only('id','name');
                }),
            ]
            ];
    }
    
}