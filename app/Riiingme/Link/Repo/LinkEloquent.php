<?php namespace Riiingme\Link\Repo;

use Riiingme\Link\Entities\Riiinglink as M;

class LinkEloquent implements LinkInterface {

    public function __construct(M $link){

        $this->link = $link;
    }
    public function getAll(){

        return $this->link->with(array('user'))->get();

    }
    public function find($id){

        return $this->link->with(array('host','invited','metas'=> function ($query)
        {
            $query->join('types','types.id','=','metas.type_id');

        }))->findOrFail($id);
    }

    public function findByHost($id){
        return $this->link->where('host_id','=',$id)->with(array('invited'))->get();
    }

}
