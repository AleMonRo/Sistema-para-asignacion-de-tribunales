<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesional;
use App\Http\Requests;

class ProfesionalesController extends Controller
{
    public function index(){
        $profesionales = new Profesional;
        return view('profesional.index', compact('profesionales'), ['areas'=>$profesionales->all()]);
    }
    public function invitados(){
        $profesionales = new Profesional;
        return view('invitados.index', compact('invitados'), ['areas'=>$profesionales->invitados()]);
    }
    public function docentes(){
        $profesionales = new Profesional;
        return view('docentes.index', compact('docentes'), ['areas'=>$profesionales->docentes()]);
    }
}
