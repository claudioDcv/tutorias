<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Profesor;

class ProfesorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $query = $request->get('q');
        $profesores;
        if ($query) {
          $profesores = Profesor::with('asignature')->where('complete_name', 'LIKE', "%$query%")->paginate(5);
        }else{
          $profesores = Profesor::with('asignature')->paginate(5);
        }
        return view('crud/profesor-select', [
          'profesores' => $profesores,
        ]);
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
        setlocale(LC_MONETARY, 'es_CL');
        $profesor = Profesor::with('asignature')->findOrFail($id);
        return view('crud/profesor-select-by-id', [
          'profesor' => $profesor,
        ]);
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

      $user = \Auth::user();
      if ($user->hasRole('inspector')) {
        try {
          $result = Profesor::destroy($id);
          return [
            'result' => $result ? '1' : '0',
          ];
        } catch (\Illuminate\Database\QueryException $e) {
          return [
            'result' => '-1',
            'error' => $e,
          ];
        }
      }else{
        return [
          'result' => '-2',
          'error' => 'No tiene permisos para realizar esta accion',
        ];
      }

    }
}
