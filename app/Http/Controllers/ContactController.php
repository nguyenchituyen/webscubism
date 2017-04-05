<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contact;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $contacts = Contact::orderBy('id', 'DESC')->paginate(5);
        return view('contacts.contact_index', compact('contacts'))->with('contacts', Contact::paginate(5));
    }

    public function search(Request $request) {
        $name = $request->input('name');
        $contacts = DB::table('dtb_contacts')->where('dtb_contacts.name', 'LIKE', '%' . $name . '%')->orderBy('dtb_contacts.id', 'DESC')->paginate(5);
        return view('contacts.contact_index', compact('contacts'));
    }
}
