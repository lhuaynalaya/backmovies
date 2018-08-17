<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActor;
use App\Services\Actor as ActorService;

class ActorController extends Controller{
    protected $actorService;

    public function __construct(ActorService $actorService)
    {
        $this->actorService = $actorService;
    }

    public function index(){
        return $this->actorService->all();
    }

    public function store(StoreActor $request){
        return $this->actorService->store($request->all());
    }

    public function update(StoreActor $request, $actor){
        return $this->actorService->update($request-> all(), $actor->id);
    }

    public function destroy($actor){
        return $this->actorService->delete($actor->id);
    }

    public function show($actor){
        return $actor;
    }
}