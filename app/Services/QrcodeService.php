<?php

namespace App\Services;

use Endroid\QrCode\Builder\Builder;
use Illuminate\Support\Facades\Storage;

class QrcodeService{

    protected $qrcode;
    public function __construct($data) {
        
        $this->qrcode = new Builder(data: $data)->build();
    }
    function generateImage($filename){
        $filename ='qrcodes/'.$filename.'.png' ;
        if (!Storage::disk('public')->exists($filename)){
            Storage::disk('public')->put($filename,$this->qrcode->getString());

            $url = Storage::url($filename);

            return $url; 
        }

        return Storage::url($filename);
        
    }
  
}