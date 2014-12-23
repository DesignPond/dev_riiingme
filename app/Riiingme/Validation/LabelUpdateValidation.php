<?php namespace Riiingme\Validation;


class LabelUpdateValidation{

    /*
     * Validation rules
    */
    protected $rules = array(
        'label'   => 'required',
        'user_id' => 'required'
    );

    /*
     * Validation messages
    */
    protected $messages = array(
        'label.required'   => 'Le label est requis',
        'user_id.required' => 'L\'utilisateur est requis'
    );

}