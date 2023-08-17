<?php

namespace App\Http\Controllers;

use App\Models\Sendcontact;
use Illuminate\Http\Request;

class SendContactController extends Controller
{
    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        Sendcontact::create($data);

        return redirect()->route('index');
    }
}
