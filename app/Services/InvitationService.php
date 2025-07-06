<?php

namespace App\Services;

use App\Models\Guest;
use Illuminate\Container\Attributes\DB;

class InvitationService{

    public function toAcceptFamily($data,$family){

        $family->guests()->update(['confirmed'=>false]);

        Guest::whereIn('id', $data)->update(['confirmed' => true]);

        $responsibleMember = Guest::find($family->responsible_id);

        return $responsibleMember;
    }
    public function toAcceptSingle($id){
        $guest = Guest::find($id);
        $guest->update(['confirmed'=>true]);

        return $guest;
    }
    public function toDenySingle($id){
        $guest = Guest::find($id);
        $guest->update(['confirmed'=>false]);
        return $guest;
    }
}