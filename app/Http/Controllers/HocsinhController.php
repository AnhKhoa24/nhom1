<?php

namespace App\Http\Controllers;

use App\Models\Hocsinh;
use Illuminate\Http\Request;
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

    
    public function create()
    {
        $lophocs = DB::select("SELECT malop, tenlop FROM lophocs");
        return view('hocsinhs.create',[
            'lophocs'=> $lophocs
        ]);
    }


    public function store(Request $request)
    {
        $hocsinh = new Hocsinh();
        $hocsinh->name = $request->input('name');
        $hocsinh->ngaysinh = $request->input('ngaysinh');
        $hocsinh->gioitinh = $request->input('gioitinh');
        $hocsinh->malop = $request->input('malop');
        $hocsinh->save();
        return redirect("hocsinh");
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
