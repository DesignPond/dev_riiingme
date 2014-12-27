<?php

use Riiingme\Api\Transformer\MetaTransformer;
use Riiingme\Api\Worker\MetaWorker;

use Riiingme\Validation\MetaCreateValidation as MetaCreateValidation;
use Riiingme\Validation\MetaUpdateValidation as MetaUpdateValidation;
use Laracasts\Validation\FormValidationException;


class MetasController extends ApiController {

    protected $meta;
	protected $creation;
	protected $update;

    public function __construct( MetaWorker $meta, MetaCreateValidation $creation, MetaUpdateValidation $update)
    {
		parent::__construct();

		$this->meta      = $meta;
		$this->creation  = $creation;
		$this->update    = $update;

    }

	/**
	 * List all metas for Riiinglink
	 * GET /metas
	 *
	 * @param  int $riiinglink
	 * @return json
	 */
	public function index()
	{
		if(Input::get('riiinglink_id'))
		{
			$metas = $this->meta->getMetasForRiiinglink(Input::get('riiinglink_id'));

			return  $this->respondWithCollection($metas, new MetaTransformer);
		}

		return $this->errorWrongArgs('Argument manque');

	}

	/**
	 * Store a new label for user
	 * POST /metas
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

		$meta = $this->meta->createMeta( Input::all() );

		return $this->respondWithItem($meta, new MetaTransformer);

	}

	/**
	 * Return a specified label
	 * GET /metas/{id}
	 *
	 * @param  int $id
	 * @return json
	 */
	public function show($id)
	{

		$meta = $this->meta->getMeta($id);

		if($meta){
			return $this->respondWithItem($meta, new MetaTransformer);
		}

		return  $this->respondWithArray(array('data' => []));

	}

	/**
	 * Return the specified label
	 * PUT /metas/{id}
	 *
	 * @param  int  $id
	 * @return json
	 */
	public function update($id)
	{
		return $this->errorUnauthorized();
	}

	/**
	 * Remove the specified label
	 * DELETE /metas/{id}
	 *
	 * @param  int  $id
	 * @return json
	 */
	public function destroy($id)
	{

		if(!$this->meta->deleteMeta($id)){

			return $this->errorNotFound();
		}

		return  $this->respondWithArray(array('data' => "ok"));

	}

}