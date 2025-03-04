<?php namespace Riiingme\Validation;

use Laracasts\Validation\FormValidator;

class LabelUpdateValidation extends FormValidator{

    /*
     * Validation rules
    */
    protected $rules = array(
        'id'        => 'exists:labels',
        'label'     => 'required',
        'user_id'   => 'required'
    );

    /*
     * Validation messages
    */
    protected $messages = array(
        'label.required'     => 'Le label est requis',
        'user_id.required'   => 'L\'utilisateur est requis'
    );

}