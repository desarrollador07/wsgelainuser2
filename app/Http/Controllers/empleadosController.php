<?php

namespace App\Http\Controllers;
use App\Models\empleados;
use Illuminate\Http\Request;

class empleadosController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return empleados::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return empleados::create($request->all());
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
    public function update(Request $request, $emdid)
    {
        $cl = empleados::findOrfail($emdid);
        $cl -> emdcedula = $request->emdcedula;
        $cl -> emdnombres = $request -> emdnombres;
        $cl ->emdapellidos = $request ->emdapellidos;
        $cl ->emdsexo =$request ->emdsexo;
        $cl ->emdfecnacido = $request ->emdfecnacido;
        $cl ->emdestcivil = $request ->emdestcivil;
        $cl ->emdnivelestudio = $request ->emdnivelestudio;
        $cl ->emdprofesion = $request ->emdprofesion;
        $cl ->emddepartamento =$request ->emddepartamento;
        $cl ->emdciudad = $request ->emdciudad;
        $cl ->emddireccion = $request ->emddireccion;
        $cl ->emdtelefono = $request ->emdtelefono;
        $cl ->emdemail = $request ->emdemail;
        $cl ->emdestracto = $request ->emdestracto;
        $cl ->emdtipovivienda = $request ->emdtipovivienda;
        $cl ->emdpersdepen = $request ->emdpersdepen;
        $cl ->emdempresa = $request ->emdempresa;
        $cl ->emdtiempolab = $request ->emdtiempolab;
        $cl ->emdcargo = $request ->emdcargo;
        $cl ->emdtipodecargo = $request ->emdtipodecargo;
        $cl ->emdtiemcargo = $request ->emdtiemcargo;
        $cl ->emdarea = $request ->emdarea;
        $cl ->emdtipocontrato = $request ->emdtipocontrato;
        $cl ->emdtiposalario = $request ->emdtiposalario;
        $cl ->emdusuarioreg = $request ->emdusuarioreg;
        $cl ->emdipreg = $request ->emdipreg;
        $cl -> update();
        return $cl;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($opa_id)
    {
        $cl = empleados::findOrfail($opa_id);
        $cl -> delete();
    }
}
