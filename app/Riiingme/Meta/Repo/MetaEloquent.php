<?php namespace Riiingme\Meta\Repo;

use Riiingme\Meta\Repo\MetaInterface;
use Riiingme\Meta\Entities\Meta as M;

class MetaEloquent implements MetaInterface {

    public function __construct(M $meta){

        $this->meta = $meta;
    }

    public function getAll(){

        return $this->meta->with(array('metas'))->get();
    }

    public function findByLink($riiinglink){

        return $this->meta->where('riiinglink_id','=',$riiinglink)->get();
    }

    public function find($id){

        return $this->meta->with(array('metas'))->findOrFail($id);
    }

    public function getRang($riiinglink_id,$groupe_id){

        return $this->meta->where('riiinglink_id','=',$riiinglink_id)->where('groupe_id','=',$groupe_id)->max('rang');
    }
}
