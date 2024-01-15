<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temporada;

class TemporadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $temporadas = Temporada::all();
        $mensaje = "Temporadas de las series";
        return view("temporadas/index",["temporadas"=>$temporadas,"mensaje"=>$mensaje]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("temporadas/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $temporadas = new Temporada;
        $temporadas -> serie = $request -> input("serie");
        $temporadas -> temporada = $request -> input("temporada");
        $temporadas -> nombreTemporada = $request -> input("nombreTemporada");
        $temporadas -> capitulos = $request -> input("capitulos");
        $temporadas -> save();
        return redirect("/temporadas");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $temporadas = Temporada::find($id);
        return view("temporadas/show",["temporadas"=>$temporadas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $temporadas = Temporada::find($id);
        return view("temporadas/edit",["temporadas"=>$temporadas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $temporadas = Temporada::find($id);
        $temporadas -> serie = $request -> input("serie");
        $temporadas -> temporada = $request -> input("temporada");
        $temporadas -> nombreTemporada = $request -> input("nombreTemporada");
        $temporadas -> capitulos = $request -> input("capitulos");
        $temporadas -> save();
        return redirect("/temporadas");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("temporadas")->where("id","=",$id)->delete();
        return redirect("/temporadas");
    }
}
