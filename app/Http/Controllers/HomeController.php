<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class HomeController extends Controller
{

    public function index()
    {
        //memanggil data
        $contacts=Contact::all();
        return view('leasing.home',compact('contacts'));
    }
    public function car()
    {
        //memanggil data
        $contacts=Contact::all();
        return view('leasing.car',compact('contacts'));
    }
    public function calculator()
    {
        //memanggil data
        $contacts=Contact::all();
        return view('leasing.calculator',compact('contacts'));
    }
    public function calculate(Request $request)
    {
        //joss
        $harga_kendaraan    = $request->input('harga_kendaraan');
        $uang_muka          = $harga_kendaraan*$request->input('uang_muka')/100;
        $qty_cicilan        = $request->input('qty_cicilan');
        $plafon             = $harga_kendaraan-$uang_muka;
        $pokok_bulanan      = $plafon/$qty_cicilan;
        $bunga_persen       = $request->input('bunga');
        $bunga_nominal      = $bunga_persen*$plafon/12/100;
        $cicilan_bulanan    = $pokok_bulanan+$bunga_nominal;
        $unique             = uniqid();
        $data = [
            'unique'            =>$unique,
            'nik'               =>$request->input('nik'),
            'nama'              =>$request->input('nama'),
            'usia'              =>$request->input('usia'),
            'hp'                =>$request->input('hp'),
            'email'             =>$request->input('email'),
            'alamat'            =>$request->input('alamat'),
            'harga_kendaraan'   =>$harga_kendaraan,
            'uang_muka'         =>$uang_muka,
            'plafon'            =>$plafon,
            'qty_cicilan'       =>$qty_cicilan,
            'bunga_persen'      =>$bunga_persen,
            'bunga'             =>$bunga_nominal,
            'cicilan'           =>$cicilan_bulanan,
        ];
//        $contact=new Contact($data);
//        $contact->save();
        return view('leasing.calculate',compact('data'));
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
        $contact = Contact::find($id);
        return view('contact.edit',compact('contact'));
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
