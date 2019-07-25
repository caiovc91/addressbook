<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contacts::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       echo("entrou na function");
        $request->validate([
            'name'=>        'required',
            'lastname'=>    'required',
            'phone'=>       'required',
            'mail' =>       'required'
          ]);
          $contact = new Contacts([
            'name'=>        $request->get('name'),  
            'lastname'=>    $request->get('lastname'),
            'phone'=>       $request->get('phone'),
            'mail' =>       $request->get('mail')
          ]);
          $contact->save();
          return redirect('/contacts/create')->with('success', 'Contact stored!');
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
        //
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
        $request->validate([
            'name'=>        'required',
            'lastname'=>    'required',
            'phone'=>       'required',
            'mail' =>       'required'
          ]);
          $contact = new Contacts([
            'name'=>        $request->get('name'),  
            'lastname'=>    $request->get('lastname'),
            'phone'=>       $request->get('phone'),
            'mail' =>       $request->get('mail')
          ]);
          $contact->save();
          return redirect('/contacts/create')->with('success', 'Contact edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contacts::find($id);
        $contact->delete();

     return redirect('/contact/index')->with('success', 'contact deleted successfully');
    }
}
