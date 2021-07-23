<?php

namespace App\Http\Controllers;

use App\Donasi;
use Illuminate\Http\Request;
use PDF;


class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasis= Donasi::all();
        return view ('donasis.index', compact('donasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = Donasi::kode(); 

        return view('donasis.create',['kode_unik'=>$kode]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
            'nama_donatur' => 'required',
            'jenis'=>'required',
            'nominal' => 'required',
            'kategori' => 'required',

        ]);

        Donasi::create($request->all());
   
        return redirect()->route('donasis.index')
                        ->with('success','Sukses !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function show(Donasi $donasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donasi = Donasi::find($id);

        return view('donasis.edit',compact('donasi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request-> validate([
            'kode_unik' => 'required',
            'nama_donatur' => 'required',
            'jenis'=>'required',
            'nominal' => 'required',
            'kategori' => 'required'

        ]);
        $donasi = Donasi::findorfail($id);

        $donasi->update($request->all());
  
        return redirect()->route('donasi')
                        ->with('success','Sukses !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donasi = Donasi::findorfail($id);

        $donasi->delete();
  
        return redirect()->route('donasi')
                        ->with('success','Sukses !');
    }
    public function cetak($id)
    {
        $donasi = Donasi::find($id);

        $cetak = PDF::loadview('donasis.cetak', compact('donasi'));
        return $cetak->download('Donasi SMK Wikrama.pdf');
    }

    public function landing(){
        $donasi = Donasi::all();
        return view('welcome', compact('donasi'));
    }
}
