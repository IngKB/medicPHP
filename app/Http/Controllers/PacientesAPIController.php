<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacientesAPIController extends Controller
{
    //
    public function index(){

        return Paciente::all();
    }

    public function store(){

        request()->validate([
            'primer_nombre' => 'required'
        ]);

        return Paciente::create([
            'primer_nombre' => request('primer_nombre')
        ]);
    }

    public function update(Paciente $paciente){

        request()->validate([
            'primer_nombre' => 'required'
        ]);

        $success = $paciente -> update([
            'primer_nombre' => request('primer_nombre')
        ]);

        return[
            'success' => $success
        ];
    }

    public function destroy(Paciente $paciente){

        $success = $paciente->delete();

        return [
            'success' => $success
        ];
    }
}
