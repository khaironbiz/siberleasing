<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Merk;
class ContactController extends Controller
{

    public function index()
    {
        //memanggil data
        $contacts=Contact::all();
        return view('contact.index',compact('contacts'));
    }

    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //joss
        $contact=new Contact([
            'name'=>$request->input('name'),
            'phone'=>$request->input('phone'),
            'address'=>$request->input('address'),
            'email'=>$request->input('email')
        ]);
        $contact->save();
        return redirect('/')->with('success','Contact Saved');
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
        $merk   = Merk::find($id);
        $contact = Contact::find($id);
        $data = [
            'contact'   => $contact,
            'merk'      => $merk
        ];
        return view('contact.edit',compact('data'));
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
        //
        $contact = Contact::find($id);
        $contact->name = $request->input('full_name');
        $contact->phone= $request->input('phone');
        $contact->email= $request->input('email');
        $contact->address= $request->input('address');
        $contact->save();
        return redirect('/')->with('success','Contact Saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/');
    }
}
