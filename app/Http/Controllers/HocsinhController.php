<?php

namespace App\Http\Controllers;

use App\Models\Hocsinh;
use App\Http\Requests\StoreHocsinhRequest;
use App\Http\Requests\UpdateHocsinhRequest;
use Illuminate\Support\Facades\DB;
class HocsinhController extends Controller
{
    
    public function index()
    {
        $hocsinhs = DB::select("SELECT id, name, ngaysinh, gioitinh, tenlop
        FROM hocsinhs 
        JOIN lophocs ON hocsinhs.malop = lophocs.malop");
        return view('hocsinhs.index',[
            'hocsinhs'=>$hocsinhs
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
    public function store(StoreHocsinhRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Hocsinh $hocsinh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hocsinh $hocsinh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHocsinhRequest $request, Hocsinh $hocsinh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hocsinh $hocsinh)
    {
        //
    }
}
