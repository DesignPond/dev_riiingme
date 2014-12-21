<?php namespace Riiingme\Meta\Entities;

use Droit\Common\BaseModel as BaseModel;

class Meta extends BaseModel{

    /**
     * No timestamps
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Fillable columns
     *
     * @var array
     */
    protected $fillable = array('user_id', 'meta', 'type_id', 'groupe_id', 'rang');

    /**
     * Metas belongs to user
     *
     * @var query
     */
    public function user(){

        return $this->belongsTo('Riiingme\User\Entities\User');
    }

}