<?php

namespace App\Http\Controllers;

use App\Models\Notaris;
use Illuminate\Http\Request;

class NotarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.notaris.index', [
            'notaris' => Notaris::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.notaris.create');
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
            'id_notaris' => 'required|max:8',
            'nama_notaris' => 'required|max:80',
            'alamat' => 'required|max:100',
            'no_tlp' => 'required|max:14',
            'jabatan' => 'required|max:14',

        ]);
        Notaris::create($request->all());

        return redirect('/dashboard/notaris')->with('Berhasil', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notaris  $notaris
     * @return \Illuminate\Http\Response
     */
    public function show(Notaris $notaris)
    {
        return view('dashboard.notaris.show', [
            'notaris' => $notaris
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notaris  $notaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Notaris $notaris)
    {
        return view('dashboard.notaris.edit', [
            'notaris' => $notaris
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notaris  $notaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notaris $notaris)
    {
        $request->validate([
            'id_notaris' => 'required|max:8',
            'nama_notaris' => 'required|max:80',
            'alamat' => 'required|max:100',
            'no_tlp' => 'required|max:14',
            'jabatan' => 'required|max:14',

        ]);
        $notaris->update($request->all());

        return redirect('/dashboard/notaris')->with('Berhasil', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notaris  $notaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notaris $notaris)
    {
        Notaris::destroy($notaris->id);

        return redirect('/dashboard/notaris')->with('Berhasil', 'Data Berhasil Dihapus');
    }
}
