<?php

use Riiingme\Api\Helpers\ApiHelper;

use Riiingme\User\Repo\UserInterface;
use Riiingme\Meta\Repo\MetaInterface;
use Riiingme\Type\Repo\TypeInterface;
use Riiingme\Groupe\Repo\GroupeInterface;

class MetasController extends BaseController {

    protected $user;
    protected $type;
    protected $groupe;
    protected $meta;

    public function __construct( UserInterface $user, TypeInterface $type, GroupeInterface $groupe, MetaInterface $meta)
    {
        $this->user   = $user;
        $this->type   = $type;
        $this->groupe = $groupe;
        $this->meta   = $meta;

        $this->apiHelper = new ApiHelper;
    }
	/**
	 *
     * @Get("/metas/user/{id}")
	 */
	public function user($id)
	{
        $user = $this->user->find($id);

        if(!$user->metas->isEmpty())
        {
            return array( 'metas' => $this->apiHelper->uniqueMetas($user->metas));
        }

        return [];
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