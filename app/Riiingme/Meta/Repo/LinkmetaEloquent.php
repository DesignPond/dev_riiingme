<?php namespace Riiingme\Meta\Repo;

use Riiingme\Meta\Repo\LinkmetaInterface;
use Riiingme\Meta\Entities\Riiinglink_meta as M;

class LinkmetaEloquent implements LinkmetaInterface {

    public function __construct(M $linkmeta){

        $this->linkmeta = $linkmeta;
    }

    public function getAll(){

        return $this->linkmeta->with(array('metas'))->get();
    }

    public function findByLink($riiinglink){

        return $this->linkmeta->where('riiinglink_id','=',$riiinglink)->get();
    }

    public function find($id){

        return $this->linkmeta->with(array('metas'))->findOrFail($id);
    }

    public function getRang($riiinglink_id,$groupe_id){

        return $this->linkmeta->where('riiinglink_id','=',$riiinglink_id)->where('groupe_id','=',$groupe_id)->max('rang');
    }
}
