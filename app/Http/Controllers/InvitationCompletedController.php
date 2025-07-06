<?php 

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Support\Facades\Hash;
use App\Services\QrcodeService;
use Illuminate\Support\Str;

class InvitationCompletedController{

    function __invoke($token){
      
 
        $guest = Guest::where('token',$token)->first();
     
        if (is_null($guest->family_id)) {
            $data = collect([$guest]);
        } else {
            $data = $guest->family->guests->where('confirmed', true);
        }

        
        
        $urlMaps = 'https://www.google.com/maps/dir//R.+Domingos+Nascimento,+64+-+Cidade+S%C3%A3o+Miguel,+S%C3%A3o+Paulo+-+SP,+08021-180/@-23.4913792,-46.4715776,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x94ce618b2f704bf3:0xef74df1da8cb05e!2m2!1d-46.439368!2d-23.5004343!3e3?entry=ttu&g_ep=EgoyMDI1MDUwNy4wIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D';
        $urlCalendar = 'https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=NW1kcWRmOWg4cmRuYXIzcmV0Z2Rya21wMDUgNDI5NDNkOWNiZGQ0NjY4YTI3MmEyNWYyN2U5ZGYxZjAyZDkyN2ExZDJiZmVmNDQxNTVkZmRjYTVjMDdlMGEwNEBn&tmsrc=42943d9cbdd4668a272a25f27e9df1f02d927a1d2bfef44155dfdca5c07e0a04%40group.calendar.google.com';
        $imageQrcode = (new QrcodeService(Hash::make($guest->name)))->generateImage($guest->token);
       

      
 
        return view('invitationCompleted',compact('urlMaps','urlCalendar','imageQrcode','token','data'));

    }
}