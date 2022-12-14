<?php

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Settings\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/'                          , [LoginController::class               , 'showLoginForm'       ]);
Route::get('login'                      , [LoginController::class               , 'showLoginForm'       ])->name('login');
Route::post('login'                     , [LoginController::class               , 'login'               ]);
Route::get('password/reset'             , [ForgotPasswordController::class      , 'showLinkRequestForm' ])->name('password.request');
Route::post('password/email'            , [ForgotPasswordController::class      , 'sendResetLinkEmail'  ])->name('password.email');
Route::get('password/reset/{token}'     , [ResetPasswordController::class       , 'showResetForm'       ])->name('password.reset');
Route::post('password/reset'            , [ResetPasswordController::class       , 'reset'               ])->name('password.update');
Route::get('password/confirm'           , [ConfirmPasswordController::class     , 'showConfirmForm'     ])->name('password.confirm');
Route::post('password/confirm'          , [ConfirmPasswordController::class     , 'confirm'             ]);
Route::get('email/verify'               , [VerificationController::class        , 'show'                ])->name('verification.notice');
Route::get('email/verify/{id}/{hash}'   , [VerificationController::class        , 'verify'              ])->name('verification.verify');
Route::post('email/resend'              , [VerificationController::class        , 'resend'              ])->name('verification.resend');
Route::post('logout'                    , [LoginController::class        ,'logout'])->name('logout');


Route::get('sidebar' , [MainController::class , 'sidebar'])->name('sidebar');
