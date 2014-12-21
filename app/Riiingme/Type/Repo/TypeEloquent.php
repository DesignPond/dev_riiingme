<?php namespace Riiingme\Type\Repo;

use Riiingme\Type\Repo\TypeInterface;
use Riiingme\Type\Entities\Type as M;

class TypeEloquent implements TypeInterface {

    public function __construct(M $type){

        $this->type = $type;
    }
    public function getAll(){

        return $this->type->all();
    }
    public function find($id){

        return $this->type->findOrFail($id);
    }

}
