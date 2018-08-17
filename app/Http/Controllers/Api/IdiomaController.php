<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIdioma;
use App\Services\Idioma as IdiomaService;

class IdiomaController extends Controller{
    protected $idiomaService;

    public function __construct(IdiomaService $idiomaService)
    {
        $this->idiomaService = $idiomaService;
    }

    public function index(){
        return $this->idiomaService->all();
    }

    public function store(StoreIdioma $request){
        return $this->idiomaService->store($request->all());
    }

    public function update(StoreIdioma $request, $idioma){
        return $this->idiomaService->update($request-> all(), $idioma->id);
    }

    public function destroy($idioma){
        return $this->idiomaService->delete($idioma->id);
    }

    public function show($idioma){
        return $idioma;
    }
}