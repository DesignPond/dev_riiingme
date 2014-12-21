<?php

use Riiingme\groupe\Repo\GroupeInterface;

class GroupeController extends BaseController {

    protected $groupe;

    public function __construct( groupeInterface $groupe )
    {
        $this->groupe = $groupe;
    }

	/**
     * @Get("/groupes")
	 */
	public function index()
	{
        return $this->groupe->getAll()->lists('titre','id');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /groupes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /groupes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /groupes/{id}
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
	 * GET /groupes/{id}/edit
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
	 * PUT /groupes/{id}
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
	 * DELETE /groupes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}