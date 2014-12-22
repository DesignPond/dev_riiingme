<?php

use Riiingme\Api\Helpers\ApiHelper;

use Riiingme\Label\Repo\LabelInterface;
use Riiingme\Type\Repo\TypeInterface;
use Riiingme\Groupe\Repo\GroupeInterface;

class LabelsController extends BaseController {

    protected $type;
    protected $groupe;
    protected $label;

    public function __construct( TypeInterface $type, GroupeInterface $groupe, LabelInterface $label)
    {
        $this->type   = $type;
        $this->groupe = $groupe;
        $this->label  = $label;

        $this->apiHelper = new ApiHelper;
    }

	/**
	 * Show the form for creating a new resource.
	 */
	public function index()
	{
		return $this->label->getAll();
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
	 * GET /metas/{id}
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
	 * PUT /metas/{id}
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