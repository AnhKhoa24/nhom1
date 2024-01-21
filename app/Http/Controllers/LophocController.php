<?php

namespace App\Http\Controllers;

use App\Models\Lophoc;
use Illuminate\Http\Request;
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

    public function create()
    {
        return view('lophocs.create');
        //hahahahahahahaha
    }

    public function store(Request $request)
    {
       $lophoc = new Lophoc();
       $lophoc->tenlop = $request->input('tenlop');
       $lophoc->soluong = $request->input('soluong');
       $lophoc->save();
       return redirect('/lophoc');
    }

    public function show(Lophoc $lophoc)
    {
        //
    }
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
