<?php

namespace App\Services;

use App\Models\Guest;

class GuestFamilyService{

    public function getFamilyData(Guest $guest){
        $family = $guest->family;
        $members = Guest::where('family_id',$family->id)->get();

        return [
            'family'=>[
                'familyName' =>$family->name,
                'responsibleName'=>$guest->only('id','name'),
                'familyMembers'=>$members->map(function ($members){
                    return $members->only('id','name');
                }),
            ]
            ];
    }
    
}