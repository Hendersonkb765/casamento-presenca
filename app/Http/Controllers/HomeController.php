<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Guest;
use App\Services\GuestFamilyService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Services\VerifyResponsibility;
use App\Services\InvitationService;
use App\Services\QrcodeService;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($token)     
    {

        $guest = Guest::where('token',$token)->first();
       
         if($guest->family_id ==null){
            return view("layoutSingle",['data'=>['guest'=> $guest->only('id','name','token'),'token'=>$token]]);

        }

        $family= (new GuestFamilyService())->getFamilyData($guest);
        return view('layoutFamily',[
            'data'=>$family
        ]);
    }
}
