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
	 * Show the form for creating a new resource.
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /metas
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	 * Show the form for editing the specified resource.
	 * GET /metas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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

		return  $this->label->updateLabel($data);

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /metas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}