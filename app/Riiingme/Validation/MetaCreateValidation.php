<?php namespace Riiingme\Validation;

use Laracasts\Validation\FormValidator;

class MetaCreateValidation extends FormValidator{

    /*
     * Validation rules
    */
    protected $rules = array(
        'riiinglink_id'  => 'required',
        'label_id'       => 'required'
    );

    /*
     * Validation messages
    */
    protected $messages = array(
        'riiinglink_id.required'  => 'Le riiinglink est requis',
        'label_id.required'       => 'Le label est requis'
    );

}