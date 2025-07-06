<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\RedirectBasedOnConfirmation;
use App\Http\Controllers\InvitationCompletedController;
use App\Http\Controllers\AcceptIndividualInvitationController;
use App\Http\Controllers\DownloadPdfController;
use App\Http\Controllers\AcceptFamilyInvitationController;
Route::get('qrcode/download/{token}',DownloadPdfController::class)->name('download.qrcode');


Route::get('/{token}/convite-respondido/', InvitationCompletedController::class)->name('confirmed');

Route::get('/layout-single',function(){

    return view('layoutSingle');
});

Route::get('popup',function (){
    return view('invitationDeclined');
});
Route::get('/convite-recusado', function () {  
    return view('invitationDeclined');
})->name('declined');

Route::post('/{tokenFamily}/confirmar-familia}',AcceptFamilyInvitationController::class)->name('register-family');
Route::post('/{token}/confirmar}',AcceptIndividualInvitationController::class)->name('register-single');

Route::get('/{token}',[HomeController::class,'index'])->middleware(RedirectBasedOnConfirmation::class)->name('home');



