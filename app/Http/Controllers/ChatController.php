<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;


class ChatController extends Controller
{
    public function index()
    {
      return view('partials.chats');
      //return Chat::all();
    }

    public function show($id)
    {
      return Chat::findOrFail($id);
    }
}
