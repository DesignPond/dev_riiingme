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

        }))->find($id);
    }

    /**
     * Riiinglinks initiated by current user
     */
    public function findByHost($id){

        return $this->riiinglink->where('host_id','=',$id)->with(array('invited','riiinglinks'))->get();
    }

    /**
     * Riiinglinks current user was invited to share
     */
    public function findInvited($id){

        return $this->riiinglink->where('invited_id','=',$id)->with(array('riiinglinks'))->get();
    }

    public function create(array $data){

        $riiinglink = $this->riiinglink->create([
            'host_id'    => $data['host_id'],
            'invited_id' => $data['invited_id']
        ]);

        if(!$riiinglink){
            return false;
        }

        return $riiinglink;
    }

    public function delete($id){

        $riiinglink = $this->riiinglink->find($id);

        if( ! $riiinglink )
        {
            return false;
        }

        return $riiinglink->delete();
    }

}
