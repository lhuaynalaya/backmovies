<?php
namespace App\Services;

use App\Repositories\Actor as ActorRepository;

class Actor {
    protected $actors;

    public function __construct(ActorRepository $actors) {
        $this->actors = $actors;
    }

    public function all() {
      return $this->actors->all();
    }

    public function store($data){
        return $this->actors->create($data);
    }

    public function update($data, $id){
        return $this->actors->update($data, $id);
    }

    public function delete($id){
        return $this->actors->delete($id);
    }

    public function paginate($perPage = 15, $columns = array('*'), $order_type = 'desc') {
        return $this->actors->paginate($perPage, $columns, $order_type);
    }

    public function find($id, $columns = array('*')) {
        return $this->actors->find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*')) {
        return $this->actors->findBy($field, $value, $columns);
    }
}