<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sisw = Siswa::latest()->paginate(5);
        return view ('/dashboard/sisw/index',compact('sisw'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.sisw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'NIS' => 'required',
            'NamaSiswa' => 'required',
            'Alamat' => 'required',
        ]);
        Siswa::create($request->all());

        return redirect('/dashboard/sisw')->with('Berhasil', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $sisw)
    {
        return view('dashboard.sisw.show',compact('sisw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $sisw)
    {
        return view('dashboard.sisw.edit', compact('sisw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $sisw)
    {
        $request->validate([
            'NIS' => 'required',
            'NamaSiswa' => 'required',
            'Alamat' => 'required',
        ]);

        $sisw->update($request->all());

        return redirect('/dashboard/sisw')->with('Berhasil', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $sisw)
    {
        $sisw->delete();

        return redirect('/dashboard/sisw')->with('Berhasil', 'Data Berhasil Dihapus');
    }
}