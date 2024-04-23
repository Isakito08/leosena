<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;


class VerNotasController extends Controller
{
    public function index()
    {



        $user = Auth::user();
        $estudiantes = Estudiante::all();
        // Verifica si el usuario es un estudiante
        $estudiante = DB::table('estudiantes')
            ->where('nombre','=', $user->name)
            ->first();

        if ($estudiante) {
            // El usuario es un estudiante, obtenemos su ID
            $estudianteId = $estudiante->id;

            // Obtenemos las notas del estudiante
            $notas = DB::table('notas')
                ->where('estudiante_id','=', $estudianteId)
                ->get();

            return view('mostrar.index', ['notas' => $notas] , ['estudiantes' => $estudiantes]);
        } else {
            // El usuario no es un estudiante, puedes manejar esta situación de otra manera

        }
    }
}
