<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Services\GeneratePdfService;

class DownloadPdfController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($token)
    {
        
        $guest = Guest::where('token',$token)->first();
        
        if ($guest->family_id== true){
            $guests = $guest->family->guests->where('confirmed',true)->toArray();
            $pdf= GeneratePdfService::toGenerate(imageQrcode: public_path("storage/qrcodes/{$guest->token}.png"),text: $guest->family->name, data: $guests);
        }
        else{
            $pdf= GeneratePdfService::toGenerate(imageQrcode: public_path("storage/qrcodes/{$guest->token}.png"),text: "$guest->name",data:[$guest]);
        }

        return $pdf->download('Convite de Casamento');

    }
}
