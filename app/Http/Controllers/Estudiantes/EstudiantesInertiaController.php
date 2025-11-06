<?php

namespace App\Http\Controllers\Estudiantes;

use Illuminate\Support\Facades\Redirect;
use App\Models\Estudiante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EstudiantesInertiaController extends Controller
{
    public function index(Request $request) {

        $estudiantes = Estudiante::orderBy('id', 'DESC')->get();

    
        return Inertia::render('Estudiante/Index',[
            'estudiantes' => $estudiantes
        ]);
    }
    public function create(Request $request) {
        return Inertia::render('Estudiante/Create');
    }

    public function store(Request $request){

      $estudiantes = Estudiante::create( $request->all());

      return Redirect::route('estudiantes.index');
    }
    public function edit(Estudiante $estudiante) {
        return Inertia::render('Estudiante/Edit',[
            'estudiante' => $estudiante
        ]);
    }
    public function update(Request $request, Estudiante $estudiante){
        $estudiante->update( $request->all());

        return Redirect::route('estudiantes.index');
    }
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado correctamente.');
    }
    public function deleteConfirm($id)
{
    $estudiante = Estudiante::findOrFail($id);

    return Inertia::render('Estudiante/Delete', [
        'estudiante' => $estudiante
    ]);
}
}

