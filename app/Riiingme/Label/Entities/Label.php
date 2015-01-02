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
    protected $fillable = array('user_id', 'label', 'type_id', 'groupe_id');

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

    public function setDateNaissanceAttribute($label)
    {
        if( $this->attributes['type_id'] == 13)
        {
            return (!empty( $this->label ) ? \Carbon\Carbon::parse($this->label)->format('F j, Y') : '');
        }
    }

    /**
     * Labels belongs to user
     *
     * @var query
     */
    public function user(){

        return $this->belongsTo('Riiingme\User\Entities\User');
    }

    /**
     * Labels has one to type
     *
     * @var query
     */
    public function type(){

        return $this->belongsTo('Riiingme\Type\Entities\Type');
    }

    /**
     * Labels belongs to one groupe
     *
     * @var query
     */
    public function groupe(){

        return $this->belongsTo('Riiingme\Groupe\Entities\Groupe');
    }

}