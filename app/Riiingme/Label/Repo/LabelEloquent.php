<?php namespace Riiingme\Label\Repo;

use Riiingme\Label\Repo\LabelInterface;
use Riiingme\Label\Entities\Label as M;

class LabelEloquent implements LabelInterface {

    public function __construct(M $label){

        $this->label = $label;
    }

    public function find($id){

        return $this->label->with(array('type','groupe'))->find($id);
    }

    public function findByUser($user){

        return $this->label->where('user_id','=',$user)->with(array('type','groupe'))->get();
    }

    public function findInfosByUser($user){

        return $this->label->where('user_id','=',$user)
            ->where(function($query)
            {
                $query->where('type_id','=',15)->orWhere('type_id', '=', 1)->orWhere('type_id', '=', 2);

            })->get();
    }

    public function create(array $data){

        $label = $this->label->create([
            'label'     => $data['label'],
            'user_id'   => $data['user_id'],
            'type_id'   => $data['type_id'],
            'groupe_id' => $data['groupe_id']
        ]);

        if(!$label){
            return false;
        }

        return $label;
    }

    public function update(array $data){

        $label = $this->label->findOrFail($data['id']);

        if( ! $label )
        {
            return false;
        }

        $label->label = $data['label'];

        $label->save();

        return $label;
    }

    public function delete($id){

        $label = $this->label->find($id);

        if( ! $label )
        {
            return false;
        }

        return $label->delete();
    }

}