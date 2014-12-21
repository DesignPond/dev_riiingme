<?php

use Riiingme\Api\Worker\LinkWorker;
use Riiingme\User\Repo\UserInterface;

class RiiinglinksController extends BaseController {

    protected $user;
    protected $worker;

    public function __construct(UserInterface $user, LinkWorker $worker )
    {
        $this->user   = $user;
        $this->worker = $worker;
    }

    /**
	 * Display a listing of the resource.
	 * GET /riiinglink
	 *
     * @Get("/riiinglinks/user/{id}")
	 */
	public function lists($id)
	{
        $link       = $this->worker->riinglink($id);
        $riiinglink = $this->worker->prepareLink($link);

        return array( 'riiinglink' => $riiinglink );
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /riiinglink
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
     * @Get("/riiinglink/{id}")
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $link       = $this->worker->riinglink($id);
        $riiinglink = $this->worker->prepareLink($link);

        return array( 'riiinglink' => $riiinglink );
	}

    /**
     * @Get("/riiinglink/usedMetas/{id}")
     */
    public function usedMetas($id)
    {
        $link       = $this->worker->riinglink($id);
        $usedMetas  = $this->worker->usedMetas($link);

        return array( 'usedMetas' => $usedMetas );
    }

	/**
	 * Update the specified resource in storage.
	 * PUT /riiinglink/{id}
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
	 * DELETE /riiinglink/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    /**
     * @Post("/metas/insert")
     */
    public function insert(){

        $rang = $this->worker->maxRang(\Input::get('riiinglink_id'),\Input::get('groupe_id'));
        $rang = $rang + 1;

        return  $this->worker->attachMeta(\Input::get('id'),\Input::get('riiinglink_id'),array('rang' => $rang, 'groupe_id' => \Input::get('groupe_id')));
    }

    /**
     * Display the specified resource.
     * @Get("/riiinglinksimple/{id}")
     */
    public function riiinglink($id){

        $link       = $this->worker->riinglink($id);
        $riiinglink = $this->worker->prepareLink($link);

        $groups  = $this->worker->getGroupes();
        $grouped = array();

        if(!$link->metas->isEmpty())
        {
            foreach($link->metas as $meta)
            {
                print_r($meta->pivot->groupe_id);
                foreach($groups as $id => $group)
                {
                    if( $meta->pivot->groupe_id == $id)
                    {
                        $grouped[$group][] = $meta;
                    }
                }
            }
        }

        echo '<pre>';
        print_r( $riiinglink );
        echo '</pre>';
    }

}