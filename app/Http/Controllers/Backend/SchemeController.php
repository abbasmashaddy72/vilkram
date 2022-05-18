<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSchemeRequest;
use App\Http\Requests\UpdateSchemeRequest;
use App\Models\Scheme;

class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.backend.schemes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scheme = null;

        return view('pages.backend.schemes.cev', compact('scheme'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSchemeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchemeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schemes  $scheme
     * @return \Illuminate\Http\Response
     */
    public function show(Scheme $scheme)
    {
        $scheme = $scheme->id;

        return view('pages.backend.schemes.cev', compact('scheme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schemes  $scheme
     * @return \Illuminate\Http\Response
     */
    public function edit(Scheme $scheme)
    {
        $scheme = $scheme->id;

        return view('pages.backend.schemes.cev', compact('scheme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchemeRequest  $request
     * @param  \App\Models\Schemes  $scheme
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchemeRequest $request, Scheme $scheme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schemes  $scheme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scheme $scheme)
    {
        //
    }
}
