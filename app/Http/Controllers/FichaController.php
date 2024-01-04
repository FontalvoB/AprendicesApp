<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Instructor;

use Illuminate\Http\Request;

class FichaController extends Controller
{


private $instructor;

public function __construct(){
    $this->instructor = Instructor::pluck('id_instructor', 'nombres');
}
 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['fichas']= Ficha::selectRaw('id_ficha, nombre_programa, fecha_in, fecha_fin, total_activos, total_inscritos')
        ->get();
        return view('ficha.ficha', $datos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ficha.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        Ficha::insert($datos);
       /*  return $this->belongsToMany('App\Models\Instructor', 'ficha_instructor', 'ficha_id', 'instructor_id'); */
        return redirect()->action([FichaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit($id_ficha)
    {
        $ficha=Ficha::findOrFail($id_ficha);
        return view('ficha.edit', compact('ficha'));
        return redirect()->action([FichaController::class, 'index']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_ficha)
    {
        $datos = request()->except(['_token', '_method']);
        Ficha::where('id_ficha', $id_ficha)->update($datos);

        $ficha = Ficha::findOrFail($id_ficha);
        return redirect()->action([FichaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id_ficha)
    {
        Ficha::destroy($id_ficha);
        return redirect('ficha');
    }
}