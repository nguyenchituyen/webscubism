<?php

namespace App\Http\Controllers\Api;

use App\Contact;
use Illuminate\Http\Request;
use DateTime;


class ContactController extends ApiController
{
    public function store(Request $request) {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->created_at = new DateTime();
        $contact->status = '0';
        $contact->del_flg = '0';
        $result = $contact->save();
        if ($result) {
            return response()->json([
                'error' => 'false',
                'success' => 'Successfully store Contact'
            ]);
        } else {
            return response()->json([
                'error' => 'true',
                'success' => 'Contact store failed'
            ]);
        }
    }
}