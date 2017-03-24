<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::paginate(5);
        return response()->json(array(
            'error' => false,
            'contact' => $contact,
            'status_code' => 200
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->message =  $request->get('message');

        if($contact->save()) {
            return response()->json(array(
                'error' => false,
                'message' => 'Save scuccess',
                'status_code' => 200
            ));
        } else {
            return response()->json(array(
                'error' => true,
                'message' => 'Save failed',
                'status_code' => 200
            ));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);
        if($validator->fails()) {
            return response()->json(array(
                'error' => true,
                'message' => $validator->errors(),
                'status_code' => 200
            ));
        }
        $contact = Contact::find($id);
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->message =  $request->get('message');
        if($contact->save()) {
            return response()->json(array(
                'error' => false,
                'message' => 'Update scuccess',
                'status_code' => 200
            ));
        } else {
            return response()->json(array(
                'error' => true,
                'message' => 'Update failed',
                'status_code' => 200
            ));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            return response()->json(array(
                'error' => true,
                'message' => 'Delete failed',
                'status_code' => 200
            ));
        }

        if($contact->delete()) {
            return response()->json(array(
                'error' => false,
                'message' => 'Delete scuccess',
                'status_code' => 200
            ));
        } else {
            return response()->json(array(
                'error' => true,
                'message' => 'Save failed',
                'status_code' => 200
            ));
        }
    }
}
