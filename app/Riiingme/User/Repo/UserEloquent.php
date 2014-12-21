<?php namespace Riiingme\User\Repo;

use Riiingme\User\Repo\UserInterface;
use Riiingme\User\Entities\User as M;

class UserEloquent implements UserInterface {

    public function __construct(M $user){

        $this->user = $user;
    }

    public function getAll(){

        return $this->user->with(array('links','metas'=> function ($query)
        {
            $query->join('types','types.id','=','metas.type_id')->select('types.titre');

        }))->get();
    }

    public function find($id){

        return $this->user->with(array('metas'=> function ($query)
        {
            $query->join('types','types.id','=','metas.type_id');
            $query->select('types.titre', 'metas.*');

        }))->findOrFail($id);
    }

}
