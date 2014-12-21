<?php namespace Riiingme\User\Entities;

use Riiingme\Common\BaseModel as BaseModel;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends BaseModel implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait, SoftDeletingTrait;

    /**
     * Dates as carbon objects
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

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
    public function labels(){

        return $this->hasMany('Riiingme\Label\Entities\Label');
    }

    /**
     * Link belongs to user
     *
     * @var query
     */
    public function riiinglink(){

        return $this->belongsToMany('Riiingme\Riiinglink\Entities\Riiinglink', 'users', 'host_id', 'invited_id');
    }

}
