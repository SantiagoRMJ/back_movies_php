<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Citas;

class HomeController extends Controller
{
    public function index(){
       //$users = DB::table('citas_db.Usuarios')->get();
        
            $citas = DB::table('citas_db.Citas')
                //->from('Citas')
                ->join('Usuarios', 'Citas.UsuarioId', '=',  'Usuarios.id')
                ->select('*')
                ->get();

            //$citaUsuarios[] = ['citas_db.Usuarios' => $users, 'citas_db.Citas' => $citas];
            return view('prueba', ['citas' => $citas]);
        }

}        
// dd($plateIngredients); 
        
    

