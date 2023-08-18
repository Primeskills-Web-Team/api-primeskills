<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    function subcribeEmail(EmailRequest $request) {
        $store = Email::create([
            'email' => $request->email
        ]);

        return $store ? response()->json(['success' => true],200) : response()->json(['success' => false],500);
    }
}
