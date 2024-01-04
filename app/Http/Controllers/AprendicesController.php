<?php

namespace App\Http\Controllers;

use App\Models\Aprendices;
use App\Models\Ficha;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class AprendicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['aprendices']=Aprendices::all();

        return view('aprendices.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aprendices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*  $datosEmpleado = request()->all(); */
       $datosAprendices = request()->except('_token');
       if($request->hasFile('Foto')){
        $datosAprendices['Foto']=$request->file('Foto')->store('upload', 'public');
    }
       Aprendices::insert( $datosAprendices);
       return redirect()->action([AprendicesController::class, 'index']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aprendices  $aprendices
     * @return \Illuminate\Http\Response
     */
    public function show( $id_aprendiz)
    {
        $aprendices=Aprendices::findOrFail($id_aprendiz);
        $view= view('aprendices.show', compact('aprendices'));
        $pdf = \App::Make('dompdf.wrapper');
        $pdf ->loadHTML($view);

        return $pdf->stream('aprendices.pdf');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aprendices  $aprendices
     * @return \Illuminate\Http\Response
     */
    public function edit($id_aprendiz)
    {
        $aprendices=Aprendices::findOrFail($id_aprendiz);
        return view('aprendices.edit', compact('aprendices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aprendices  $aprendices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_aprendiz)
    {
        $datosAprendices = request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $datosAprendices['Foto']=$request->file('Foto')->store('upload','public');
        }
        Aprendices::where('id_aprendiz','=',$id_aprendiz)->update($datosAprendices);

        $aprendices=Aprendices::findOrFail($id_aprendiz);

        return view('aprendices.edit', compact('aprendices'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aprendices  $aprendices
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_aprendiz)
    {
        Aprendices::destroy($id_aprendiz);
        return redirect('aprendices');

    }
}
