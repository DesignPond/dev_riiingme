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
	 * Show the form for creating a new resource.
	 */
	public function index($user_id)
	{
		$labels = $this->label->getLabelsForUser($user_id);

		return $this->respondWithCollection($labels, new LabelTransformer);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /metas
	 *
	 * @return Response
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
	 * Display the specified resource.
	 * GET /labels
	 *
	 * @return Response
	 */
	public function show($id)
	{

		$label = $this->label->getLabel($id);

		return $this->respondWithItem($label, new LabelTransformer);

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /labels/{id}
	 *
	 * @param  int  $id
	 * @return Response
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
	 * Remove the specified resource from storage.
	 * DELETE /labels/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		if(!$this->label->deleteLabel($id)){

			return $this->errorWrongArgs('Problème avec la suppresion');
		}

		return  $this->respondWithArray(array('ok'));

	}

}