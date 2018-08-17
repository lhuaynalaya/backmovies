<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenero;
use App\Services\Genero as GeneroService;

class GeneroController extends Controller{
    protected $generoService;

    public function __construct(GeneroService $generoService)
    {
        $this->generoService = $generoService;
    }

    public function index(){
        return $this->generoService->all();
    }

    public function store(StoreGenero $request){
        return $this->generoService->store($request->all());
    }

    public function update(StoreGenero $request, $genero){
        return $this->generoService->update($request-> all(), $genero->id);
    }

    public function destroy($genero){
        return $this->generoService->delete($genero->id);
    }

    public function show($genero){
        return $genero;
    }
}