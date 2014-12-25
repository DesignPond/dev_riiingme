<?php

use Riiingme\Api\Transformer\LabelTransformer;
use Riiingme\Api\Worker\LabelWorker;
use Riiingme\Validation\LabelUpdateValidation;

class LabelsController extends ApiController {

    protected $label;
	protected $validator;

    public function __construct( LabelWorker $label, LabelUpdateValidation $validator)
    {
		parent::__construct();

        $this->label     = $label;
		$this->validator = $validator;
    }

	/**
	 * List all labels for user
	 * GET /labels
	 *
	 * @param  int $user_id
	 * @return json
	 */
	public function index($user_id)
	{
		$labels = $this->label->getLabelsForUser($user_id);

		return $this->respondWithCollection($labels, new LabelTransformer);
	}

	/**
	 * Store a new label for user
	 * POST /labels
	 *
	 * @return json
	 */
	public function store()
	{
		$rules = array(
			'label'     => 'required',
			'user_id'   => 'required',
			'type_id'   => 'required',
			'groupe_id' => 'required'
		);

		$validator = Validator::make( Input::all(), $rules );

		if( !$validator->passes() ) {
			return $this->errorWrongArgs('Mauvais arguments');
		}

		$label = $this->label->createLabel( Input::all() );

		return $this->respondWithItem($label, new LabelTransformer);
	}

	/**
	 * Return a specified label
	 * GET /labels/{id}
	 *
	 * @param  int $id
	 * @return json
	 */
	public function show($id)
	{

		$label = $this->label->getLabel($id);

		return $this->respondWithItem($label, new LabelTransformer);

	}

	/**
	 * Return the specified label
	 * PUT /labels/{id}
	 *
	 * @param  int  $id
	 * @return json
	 */
	public function update($id)
	{
		$data = array('id' => $id, 'label' => Input::get('label'), 'user_id' => Input::get('user_id') );

		$rules = array(
			'label'   => 'required',
			'user_id' => 'required'
		);

		$validator = Validator::make( $data, $rules );

		if( !$validator->passes() ) {
			return $this->errorWrongArgs('Mauvais arguments');
		}

		$label = $this->label->updateLabel($data);

		return  $this->respondWithArray(array('ok'));

	}

	/**
	 * Remove the specified label
	 * DELETE /labels/{id}
	 *
	 * @param  int  $id
	 * @return json
	 */
	public function destroy($id)
	{

		if(!$this->label->deleteLabel($id)){

			return $this->errorWrongArgs('Problème avec la suppresion');
		}

		return  $this->respondWithArray(array('ok'));

	}

}