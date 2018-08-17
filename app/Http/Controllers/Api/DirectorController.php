<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDirector;
use App\Services\Director as DirectorService;

class DirectorController extends Controller{
    protected $directorService;

    public function __construct(DirectorService $directorService)
    {
        $this->directorService = $directorService;
    }

    public function index(){
        return $this->directorService->all();
    }

    public function store(StoreDirector $request){
        return $this->directorService->store($request->all());
    }

    public function update(StoreDirector $request, $director){
        return $this->directorService->update($request-> all(), $director->id);
    }

    public function destroy($director){
        return $this->directorService->delete($director->id);
    }

    public function show($director){
        return $director;
    }
}