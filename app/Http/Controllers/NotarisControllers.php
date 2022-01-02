<?php

namespace App\Http\Controllers;
use App\Models\Notaris;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NotarisControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nota = Notaris::latest()->paginate(5);
        return view ('/dashboard/nota/index',compact('nota'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.nota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NIN' => 'required',
            'NamaNotaris' => 'required',
            'Alamat' => 'required',
            'Tlp' => 'required',
            'Jabatan' => 'required',
        ]);
        Notaris::create($request->all());

        return redirect('/dashboard/nota')->with('Berhasil', 'New post has been added!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notaris $nota)
    {
        return view('dashboard.nota.show',compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Notaris $nota)
    {
        return view('dashboard.nota.edit', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notaris $nota)
    {
        $request->validate([
            'NIN' => 'required',
            'NamaNotaris' => 'required',
            'Alamat' => 'required',
            'Tlp' => 'required',
            'Jabatan' => 'required',
        ]);
        $nota->update($request->all());

        return redirect('/dashboard/nota')->with('Berhasil', 'Data berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notaris $nota)
    {
        $nota->delete();
        return redirect('/dashboard/nota')->with('Berhasil', 'Data berhasil di Hapus!');
    }
}
