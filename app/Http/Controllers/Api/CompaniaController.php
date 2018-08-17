<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompania;
use App\Services\Compania as CompaniaService;

class CompaniaController extends Controller{
    protected $companiaService;

    public function __construct(CompaniaService $companiaService)
    {
        $this->companiaService = $companiaService;
    }

    public function index(){
        return $this->companiaService->all();
    }

    public function store(StoreCompania $request){
        return $this->companiaService->store($request->all());
    }

    public function update(StoreCompania $request, $compania){
        return $this->companiaService->update($request-> all(), $compania->id);
    }

    public function destroy($compania){
        return $this->companiaService->delete($compania->id);
    }

    public function show($compania){
        return $compania;
    }
}