<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePais;
use App\Services\Pais as PaisService;

class PaisController extends Controller{
    protected $paisService;

    public function __construct(PaisService $paisService)
    {
        $this->paisService = $paisService;
    }

    public function index(){
        return $this->paisService->all();
    }

    public function store(StorePais $request){
        return $this->paisService->store($request->all());
    }

    public function update(StorePais $request, $pais){
        return $this->paisService->update($request-> all(), $pais->id);
    }

    public function destroy($pais){
        return $this->paisService->delete($pais->id);
    }

    public function show($pais){
        return $pais;
    }
}