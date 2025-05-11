<?php

namespace App\Services;
use App\Models\Guest;

class VerifyResponsibility{

    public function verificate($model){
        if(empty($model->family_id)){
            return false;
        } ;
        return true;
    }
}