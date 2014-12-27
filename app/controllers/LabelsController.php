<?php

use Riiingme\Api\Transformer\LabelTransformer;
use Riiingme\Api\Worker\LabelWorker;

use Riiingme\Validation\LabelCreateValidation as LabelCreateValidation;
use Riiingme\Validation\LabelUpdateValidation as LabelUpdateValidation;
use Laracasts\Validation\FormValidationException;

class LabelsController extends ApiController {

    protected $label;
	protected $creation;
	protected $update;

    public function __construct(LabelWorker $label, LabelCreateValidation $creation, LabelUpdateValidation $update)
    {
		parent::__construct();

        $this->label      = $label;
		$this->creation   = $creation;
		$this->update     = $update;

    }

	/**
	 * List all labels for user
	 * GET /labels
	 *
	 * @param  int $user_id
	 * @return json
	 */
	public function index()
	{
		if(Input::get('user_id'))
		{
			$labels = $this->label->getLabelsForUser(Input::get('user_id'));

			return  $this->respondWithCollection($labels, new LabelTransformer);
		}

		return $this->errorWrongArgs('Argument manque');

	}

	/**
	 * Store a new label for user
	 * POST /labels
	 *
	 * @return json
	 */
	public function store()
	{

		try
		{
			$this->creation->validate(Input::all());
		}
		catch (FormValidationException $e)
		{
			return $this->errorWrongArgs('Il manque des arguments');
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

		if($label){
			return $this->respondWithItem($label, new LabelTransformer);
		}

		return  $this->respondWithArray(array('data' => []));

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

		$data = Input::all();
		$data['id'] = $id;

		try
		{
			$this->update->validate($data);
		}
		catch (FormValidationException $e)
		{
			return $this->errorWrongArgs('Il manque des arguments');
		}

		$label = $this->label->updateLabel($data);

		return $this->respondWithItem($label, new LabelTransformer);

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

			return $this->errorNotFound();
		}

		return  $this->respondWithArray(array('data' => "ok"));

	}

}