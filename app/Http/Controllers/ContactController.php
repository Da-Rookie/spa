<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        $note = new Note();
        $note->name = $validated['name'];
        $note->email = $validated['email'];
        $note->wa_number = $validated['phone'];
        $note->content = $validated['message'];
        $note->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Pesan berhasil dikirim!'
        ]);
    }
}