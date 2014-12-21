<?php namespace Riiingme\Riiinglink\Repo;

use Riiingme\Riiinglink\Entities\Riiinglink as M;

class RiiinglinkEloquent implements RiiinglinkInterface {

    public function __construct(M $riiinglink){

        $this->riiinglink = $riiinglink;
    }
    public function getAll(){

        return $this->riiinglink->with(array('user'))->get();

    }
    public function find($id){

        return $this->riiinglink->with(array('host','invited','metas'=> function ($query)
        {
            $query->join('types','types.id','=','metas.type_id');

        }))->findOrFail($id);
    }

    public function findByHost($id){
        return $this->riiinglink->where('host_id','=',$id)->with(array('invited'))->get();
    }

}
