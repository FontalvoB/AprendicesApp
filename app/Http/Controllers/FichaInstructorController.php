<?php

namespace App\Http\Controllers;


use App\Models\Ficha;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FichaInstructorController extends Controller
{

/* 
    private $instructor;
    private $ficha;

public function __construct(){
    $this->instructor = Instructor::pluck('id_instructor', 'nombres');
    $this->ficha = Ficha::pluck('id_ficha', 'nombre_programa');
} */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $FI =  DB::table('ficha_instructor')->get();
        return view('ficha-instructor.ficha-instructor', compact('FI'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $instructor=  DB::table('instructors')->get();
        $ficha=  DB::table('fichas')->get();
        return view('ficha-instructor.create', compact('instructor', 'ficha'));
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
        DB::table('ficha_instructor')->insert($datos);
       /*  return $this->belongsToMany('App\Models\Instructor', 'ficha_instructor', 'ficha_id', 'instructor_id'); */
        return redirect()->action([FichaInstructorController::class, 'index']);
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
        $fichainstructor= DB::table('ficha_instructor')->find($id);
        return view('ficha-instructor.edit', compact('fichainstructor'));
        return redirect()->action([FichaInstructorController::class, 'index']);
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
        $datos = request()->except(['_token', '_method']);
        DB::table('ficha_instructor')->where('id', $id)->update($datos);

        $fichainstructor =DB::table('ficha_instructor')->find($id);
        return redirect()->action([FichaInstructorController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        DB::table('ficha_instructor')->where('id', $id)->delete();
        return redirect('ficha-instructor');
    }
}
