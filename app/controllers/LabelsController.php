<?php

use Riiingme\Api\Helpers\ApiHelper;
use Riiingme\Api\Worker\LabelWorker;

class LabelsController extends BaseController {

    protected $type;
    protected $groupe;
    protected $label;

    public function __construct( LabelWorker $label)
    {
        $this->label  = $label;

        $this->apiHelper = new ApiHelper;
    }

	/**
	 * Show the form for creating a new resource.
	 */
	public function index()
	{
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
		echo '<pre>';
		print_r($this->label->labels($id));
		echo '</pre>';
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