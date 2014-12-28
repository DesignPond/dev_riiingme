<?php namespace Riiingme\Validation;

use Laracasts\Validation\FormValidator;

class RiiinglinkCreateValidation extends FormValidator{

    /*
     * Validation rules
    */
    protected $rules = array(
        'host_id'    => 'required',
        'invited_id' => 'required'
    );

    /*
     * Validation messages
    */
    protected $messages = array(
        'host_id.required'     => 'Un id host est requis',
        'invited_id.required'  => 'Un id invité est requis'
    );

}