<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use Illuminate\Support\Facades\DB;
use App\Contact;
class ContactController extends Controller
{

    public function index()
    {
        //memanggil data
        $contacts=Contact::all();
        return view('kontak.index',compact('contacts'));
    }

    public function create()
    {
        //
        return view('kontak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasfile('filename')) {            
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('assets\upload\images\users'), $filename);
            $contact=new Contact([
                'name'=>$request->input('name'),
                'phone'=>$request->input('phone'),
                'address'=>$request->input('address'),
                'email'=>$request->input('email'),
                'foto'=>$filename,
                'has_contact'=>md5(uniqid())
            ]);
            $add = $contact->save();
            if($add != NULL){
                return redirect('/contacts#contacts')->with([
                    'jenis'     => 'alert',
                    'type'      => 'success',
                    'pesan'     => 'Data berhasil disimpan'
                ]);
            }else{
                return redirect('/contacts#contacts')->with([
                    'jenis'     => 'alert',
                    'type'      => 'danger',
                    'pesan'     => 'Data gagal disimpan'
                ]);
            }
        }else{
            echo'Gagal';
        }
        
        
            
            
        
        
        //joss
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = DB::table('contacts')->where('has_contact', $id)->first();
        $data = [
            'contact'   => $contact
        ];
        return view('kontak.detail',compact('data'));
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
        $contact = DB::table('contacts')->where('has_contact', $id)->first();
        // $contact    = Contact::where('has_contact', $has_contact)->get();
        // $contact = Contact::find($id);
        $data = [
            'contact'   => $contact
        ];
        return view('kontak.edit',compact('data'));
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
        $contact->name = $request->input('name');
        $contact->phone= $request->input('phone');
        $contact->email= $request->input('email');
        $contact->address= $request->input('address');
        $update = $contact->save();
        if($update != NULL){
            return redirect('/contacts#contacts')->with([
                'jenis'     => 'alert',
                'type'      => 'success',
                'pesan'     => 'Data berhasil dirubah'
            ]);
        }else{
            return redirect('/contacts#contacts')->with([
                'jenis'     => 'alert',
                'type'      => 'danger',
                'pesan'     => 'Data gagal dirubah'
            ]);
        }
        // return redirect('/contacts#contacts')->with('success','Contact Saved');
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
