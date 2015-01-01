<?php

use Riiingme\Api\Worker\RiiinglinkWorker;
use Riiingme\Api\Worker\LabelWorker;

use Riiingme\Api\Helpers\ApiHelper;

class UserController extends \BaseController {

	protected $riiinglink;
	protected $label;

	public function __construct(RiiinglinkWorker $riiinglink, LabelWorker $label)
	{
		$this->riiinglink = $riiinglink;
		$this->label      = $label;

		$this->apiHelper  = new ApiHelper;

		$types   = $this->label->getTypes('titre','id');
		$groupes = $this->label->getGroupes('titre','id');

		View::share('types', $types);
		View::share('groupes', $groupes);
	}

	/**
	 * Display a listing of the resource.
	 * GET /user
	 *
	 * @return Response
	 */
	public function index()
	{
		// The authentification is not used for now, we are faking a user id
		$id = 1;
		setlocale(LC_ALL, 'fr_FR');

		$riiinglink = $this->riiinglink->getRiiinglink(1);
		$grouped    = $this->label->getLabelsForUserInGroups(1);

		$metas = ( isset($riiinglink->labels) ? $riiinglink->labels->lists('id') : [] );

		$invited      = $this->riiinglink->getRiiinglink(4);
		$riiinglink2  = $this->apiHelper->dispatchRiiinglinkInGroup($invited);

		return View::make('site.users.index')->with(array('riiinglink' => $riiinglink, 'grouped' => $grouped, 'metas' => $metas, 'riiinglink2' => $riiinglink2, 'invited' => $invited ));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /user/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /user/{id}/edit
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
	 * PUT /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}