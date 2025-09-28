<?php

namespace App\Http\Controllers;



use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'footer_email'   => 'required|email|max:255',
        ]);

        $subs = new Subscriber();
        $subs->email = $validated['footer_email'];
        $subs->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Pesan berhasil dikirim!'
        ]);
    }
}