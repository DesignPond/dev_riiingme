<?php namespace Riiingme\Groupe\Repo;

use Riiingme\Groupe\Entities\Groupe as M;

class GroupeEloquent implements GroupeInterface {

    public function __construct(M $groupe){

        $this->groupe = $groupe;
    }
    public function getAll(){

        return $this->groupe->all();

    }
    public function find($id){

        return $this->groupe->findOrFail($id);
    }

}
