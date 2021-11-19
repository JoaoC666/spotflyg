<?php

namespace App\Http\Controllers;

use App\Models\ReproductorModel;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ReproductorController extends Controller
{
    private  $datos_validacion=[
        'musica'=>'required|mimes:mp3',
    ];
    public function index(){
        $lista = ReproductorModel::where('estado',1)->get();
        return view('reproductor.index',compact('lista'));
    }

    public function create(){
        return view('reproductor.create');
    }

    public function store(Request $request){
        $request->validate(
            $this->datos_validacion
        );
    
    $musica=$request->file('musica')->store('public');
    $url=Storage::url($musica);
    
    ReproductorModel::create([
        'musica'=>$url,
        'titulo'=>$request->titulo,
        'autor'=>$request->autor,
        'categoria'=>$request->categoria
    ]);
    
    
    return redirect('/reproductor')->with('succes','se subio la cancion');
    }
    
}
