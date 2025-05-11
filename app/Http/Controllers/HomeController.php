<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Guest;
use App\Services\GuestFamilyService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Services\VerifyResponsibility;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Guest $guest)
    {


        if($guest->family_id == null || $guest->family->responsible_id== $guest->id){
            return view("welcome",['data'=>['guest'=> $guest->only('id','name')]]);
        }
        $family= (new GuestFamilyService())->getFamilyData($guest);

        
        return view('welcome',[
            'data'=>$family
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
