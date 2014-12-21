<?php namespace Riiingme\Label\Entities;

use Riiingme\Common\BaseModel as BaseModel;

class Label extends BaseModel{

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
     * Metas belongs to user
     *
     * @var query
     */
    public function user(){

        return $this->belongsTo('Riiingme\User\Entities\User');
    }

}