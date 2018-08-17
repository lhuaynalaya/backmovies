<?php
namespace App\Services;

use App\Repositories\Director as DirectorRepository;

class Director {
    protected $directors;

    public function __construct(DirectorRepository $directors) {
        $this->directors = $directors;
    }

    public function all() {
      return $this->directors->all();
    }

    public function store($data){
        return $this->directors->create($data);
    }

    public function update($data, $id){
        return $this->directors->update($data, $id);
    }

    public function delete($id){
        return $this->directors->delete($id);
    }

    public function paginate($perPage = 15, $columns = array('*'), $order_type = 'desc') {
        return $this->directors->paginate($perPage, $columns, $order_type);
    }

    public function find($id, $columns = array('*')) {
        return $this->directors->find($id, $columns);
    }

    public function findBy($field, $value, $columns = array('*')) {
        return $this->directors->findBy($field, $value, $columns);
    }
}