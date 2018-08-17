<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCensura;
use App\Services\Censura as CensuraService;

class CensuraController extends Controller{
    protected $censuraService;

    public function __construct(CensuraService $censuraService)
    {
        $this->censuraService = $censuraService;
    }

    public function index(){
        return $this->censuraService->all();
    }

    public function store(StoreCensura $request){
        return $this->censuraService->store($request->all());
    }

    public function update(StoreCensura $request, $censura){
        return $this->censuraService->update($request-> all(), $censura->id);
    }

    public function destroy($censura){
        return $this->censuraService->delete($censura->id);
    }

    public function show($censura){
        return $censura;
    }
}