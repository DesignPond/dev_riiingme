<?php namespace Riiingme\Meta\Repo;

use Riiingme\Meta\Repo\MetaInterface;
use Riiingme\Meta\Entities\Meta as M;

class MetaEloquent implements MetaInterface {

    public function __construct(M $meta){

        $this->meta = $meta;
    }

    public function getAll(){

        return $this->meta->with(array('labels'))->get();
    }

    public function find($id){

        return $this->meta->with(array('labels'))->find($id);
    }

    public function findByRiiinglink($riiinglink){

        return $this->meta->where('riiinglink_id','=',$riiinglink)->with(array('labels'))->orderBy('id')->get();
    }

    public function create(array $data){

        $meta = $this->meta->create([
            'riiinglink_id' => $data['riiinglink_id'],
            'label_id'      => $data['label_id']
        ]);

        if(!$meta){
            return false;
        }

        return $meta;
    }

    public function delete($id){

        $meta = $this->meta->find($id);

        if( ! $meta )
        {
            return false;
        }

        return $meta->delete();
    }
}
