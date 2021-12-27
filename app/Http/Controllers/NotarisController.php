<?php

namespace App\Http\Controllers;

use App\Models\Notaris;
use App\Http\Requests\StoreNotarisRequest;
use App\Http\Requests\UpdateNotarisRequest;

class NotarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNotarisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotarisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notaris  $notaris
     * @return \Illuminate\Http\Response
     */
    public function show(Notaris $notaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notaris  $notaris
     * @return \Illuminate\Http\Response
     */
    public function edit(Notaris $notaris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNotarisRequest  $request
     * @param  \App\Models\Notaris  $notaris
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotarisRequest $request, Notaris $notaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notaris  $notaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notaris $notaris)
    {
        //
    }
}
