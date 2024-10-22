<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $ValidateData = $request->validate([
            'isim' => 'required',
            'konu' => 'required',
            'mesaj' => 'required|min:10',
        ]);
        dd($ValidateData);
        dd("mesajınız gönderildi");

    }
}



