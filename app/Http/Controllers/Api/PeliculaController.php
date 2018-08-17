<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePelicula;
use App\Services\Pelicula as PeliculaService;

class PeliculaController extends Controller{
    protected $peliculaService;

    public function __construct(PeliculaService $peliculaService)
    {
        $this->peliculaService = $peliculaService;
    }

    public function index(){
        return $this->peliculaService->all();
    }

    public function store(StorePelicula $request){
        return $this->peliculaService->store($request->all());
    }

    public function update(StorePelicula $request, $pelicula){
        return $this->peliculaService->update($request-> all(), $pelicula->id);
    }

    public function destroy($pelicula){
        return $this->peliculaService->delete($pelicula->id);
    }

    public function show($pelicula){
        return $pelicula;
    }
}