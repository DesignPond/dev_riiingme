<?php namespace Riiingme\Link\Entities;

use Droit\Common\BaseModel as BaseModel;

class Riiinglink extends BaseModel{

    /**
     * Fillable columns
     *
     * @var array
     */
    protected $fillable = array('host_id', 'invited_id');

    /**
     * Invited infos belongs to host user through link
     *
     * @var query
     */
    public function invited(){

        return $this->belongsTo('Riiingme\User\Entities\User','invited_id','id');
    }

    /**
     * Invited infos belongs to host user through link
     *
     * @var query
     */
    public function host(){

        return $this->belongsTo('Riiingme\User\Entities\User','host_id','id');
    }

    /**
     * Metas belongs to user
     *
     * @var query
     */
    public function metas(){

        return $this->belongsToMany('Riiingme\Meta\Entities\Meta', 'riiinglink_metas')->withPivot('groupe_id', 'rang');
    }


}