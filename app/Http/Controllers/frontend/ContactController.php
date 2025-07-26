<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('frontend.pages.contact.index');
    }
    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'pesan' => 'required',
        ]);

        \Mail::raw("Pesan dari: {$validated['nama']} ({$validated['email']})\n\nSubjek: {$validated['subjek']}\n\nPesan:\n{$validated['pesan']}", function ($message) use ($validated) {
            $message->to('etoketokkerjo@gmail.com') // Ganti dengan email kamu
                    ->subject('Pesan dari Formulir Kontak HTMLPedia');
        });

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }


}
