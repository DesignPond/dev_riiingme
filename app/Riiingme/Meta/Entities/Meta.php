<?php namespace Riiingme\Meta\Entities;

use Riiingme\Common\BaseModel as BaseModel;

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
    protected $fillable = array('riiinglink_id', 'label_id');

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
     * Metas belongs to one label
     *
     * @var query
     */
    public function labels(){

        return $this->hasOne('Riiingme\Label\Entities\Label', 'id', 'label_id');
    }


}