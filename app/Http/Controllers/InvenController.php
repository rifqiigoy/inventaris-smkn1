<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kiba;
use App\kibb;
use App\kibc;
use App\kibd;
use App\kibe;

class InvenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //==========================================================
    // DATA KIB-A
    //==========================================================
    public function index()
    {
        $kiba = kiba::paginate(1);
        return view('inventaris.kiba.index', ['kiba' => $kiba]);
    }
    //==========================================================
    // DATA KIB-B
    //==========================================================
    public function indexb()
    {
        $kibb = kibb::all();
        return view('inventaris.kibb.index', ['kibb' => $kibb]);
    }
    //==========================================================
    // DATA KIB-C
    //==========================================================
    public function indexc()
    {
        $kibc = kibc::all();
        return view('inventaris.kibc.index', ['kibc' => $kibc]);
    }
    //==========================================================
    // DATA KIB-C
    //==========================================================
    public function indexd()
    {
        $kibd = kibd::all();
        return view('inventaris.kibd.index', ['kibd' => $kibd]);
    }
    //==========================================================
    // DATA KIB-C
    //==========================================================
    public function indexe()
    {
        $kibe = kibe::all();
        return view('inventaris.kibe.index', ['kibe' => $kibe]);
    }

    //===========================================================================================================================================================
    //===========================================================================================================================================================
    //===========================================================================================================================================================


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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
