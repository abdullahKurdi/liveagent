<?php

namespace App\Http\Controllers\Supervisor\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function index(){
        return view('supervisor.chats.whatsapp.index');
    }
}
