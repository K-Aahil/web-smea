<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Http\Requests\StoreEkskulRequest;
use App\Http\Requests\UpdateEkskulRequest;

class EkskulController extends Controller
{   
    public function all()
    {
        return view('/pages/ekstrakulikuler', [
            "title" => "Ekstrakulikuler",
            "ekskul" => Ekskul::all()
        ]);
    }

    public function single(Ekskul $ekskul)
    {
        return view('/pages/detail-ekskul', [
            "title" => "Ekstrakulikuler",
            "ekskul" => $ekskul
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEkskulRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ekskul $ekskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ekskul $ekskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEkskulRequest $request, Ekskul $ekskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekskul $ekskul)
    {
        //
    }
}
