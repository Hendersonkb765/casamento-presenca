<?php

use App\Models\Guest;

class ConfirmPresenceService{

    public function confirm($data){
        
        foreach($data as $guest){
            Guest::where("id",$guest["id"])->update(["status"=> True]);
        }

    }
}