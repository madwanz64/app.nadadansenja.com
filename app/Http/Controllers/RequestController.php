<?php

namespace App\Http\Controllers;

use App\Models\RSVP;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class RequestController extends Controller
{
    public function rsvp(Request $request, $username) {
        try {
            $validated = $request->validate([
                'name_rsvp_add' => ['required', 'string'],
                'confirmation_rsvp_add' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => "Data belum lengkap"
            ], 422);
        }

        $rsvp = new RSVP();
        $rsvp->username = $username;
        $rsvp->name = $validated['name_rsvp_add'];
        $rsvp->confirmation = $validated['confirmation_rsvp_add'];
        $rsvp->save();

        return response()->json([
            'message' => "Terimakasih atas konfirmasinya"
        ]);
    }

    public function wishes(Request $request, $username) {
        try {
            $validated = $request->validate([
                'name_wish_add' => ['required', 'string'],
                'message_wish_add' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => "Data belum lengkap"
            ], 422);
        }

        $wish = new Wish();
        $wish->username = $username;
        $wish->name = $validated['name_wish_add'];
        $wish->message = $validated['message_wish_add'];
        $wish->save();

        return response()->json([
            'message' => "Terimakasih"
        ]);
    }
}
