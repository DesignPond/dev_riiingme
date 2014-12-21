<?php namespace Riiingme\Meta\Repo;

use Riiingme\Meta\Repo\MetaInterface;
use Riiingme\Meta\Entities\Meta as M;

class MetaEloquent implements MetaInterface {

    public function __construct(M $meta){

        $this->meta = $meta;
    }
    public function getAll(){

        return $this->meta->all();
    }
    public function find($id){

        return $this->meta->with(array('metas'))->findOrFail($id);
    }

    public function create(array $data){

        $meta = $this->meta->create([
            'meta'      => $data['id'],
            'user_id'   => $data['user_id'],
            'type_id'   => $data['type_id'],
            'groupe_id' => $data['groupe_id'],
            'rang'      => $data['rang']
        ]);

        if(!$meta){
            return false;
        }

        return $meta;
    }

}
