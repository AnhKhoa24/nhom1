<?php

namespace App\Http\Controllers;

use App\Models\Lophoc;
use App\Http\Requests\StoreLophocRequest;
use App\Http\Requests\UpdateLophocRequest;
use Illuminate\Support\Facades\DB;

class LophocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lophocs = DB::select("SELECT * FROM lophocs");

        return view('lophocs.index',[
            'lophocs'=>$lophocs
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
    public function store(StoreLophocRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lophoc $lophoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lophoc $lophoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLophocRequest $request, Lophoc $lophoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lophoc $lophoc)
    {
        //
    }
}
