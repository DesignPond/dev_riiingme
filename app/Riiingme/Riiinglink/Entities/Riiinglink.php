<?php namespace Riiingme\Riiinglink\Entities;

use Riiingme\Common\BaseModel as BaseModel;

class Riiinglink extends BaseModel{

    /**
     * Fillable columns
     *
     * @var array
     */
    protected $fillable = array('host_id', 'invited_id');

    /**
     * Validation rules
     */
    protected static $rules = array(
    );

    /**
     * Validation messages
     */
    protected static $messages = array(
    );

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
    public function labels(){

        return $this->belongsToMany('Riiingme\Label\Entities\Label', 'metas');
    }


}