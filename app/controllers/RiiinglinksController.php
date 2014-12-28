<?php

use Riiingme\Api\Transformer\RiiinglinkTransformer;
use Riiingme\Api\Worker\RiiinglinkWorker;

use Riiingme\Validation\RiiinglinkCreateValidation as RiiinglinkCreateValidation;
use Laracasts\Validation\FormValidationException;

class RiiinglinksController extends ApiController {

    protected $riiinglink;
    protected $creation;

    public function __construct(RiiinglinkWorker $riiinglink, RiiinglinkCreateValidation $creation)
    {
        parent::__construct();

        $this->riiinglink = $riiinglink;
        $this->creation   = $creation;

    }

    /**
     * List all riiinglinks for user
     * GET /riiinglinks
     *
     * @param  int $host_id is auth->id
     * @return json
     */
    public function index()
    {
        // The authentification is not used for now, we are faking a user id
        $id = 1;

        try
        {
            $riiinglinks = $this->riiinglink->getRiiinglinksForHost($id);

            return  $this->respondWithCollection($riiinglinks, new RiiinglinkTransformer);
        }
        catch (FormValidationException $e)
        {
            return $this->errorWrongArgs('Argument manque');
        }

    }

    /**
     * List all riiinglinks for user invited
     * GET /riiinglinks
     *
     * @param  int $host_id is auth->id
     * @return json
     */
    public function invite()
    {
        // The authentification is not used for now, we are faking a user id
        $id = 1;

        try
        {
            $riiinglinks = $this->riiinglink->getRiiinglinksInvited($id);

            return  $this->respondWithCollection($riiinglinks, new RiiinglinkTransformer);
        }
        catch (FormValidationException $e)
        {
            return $this->errorWrongArgs('Argument manque');
        }

    }

    /**
     * Store a new riiinglink for user
     * POST /riiinglinks
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
            return $this->errorWrongArgs('Le riiinglink existe déjà');
        }

        $riiinglink = $this->riiinglink->createRiiinglink( Input::all() );

        return $this->respondWithItem($riiinglink, new RiiinglinkTransformer);

    }

    /**
     * Return a specified riiinglink
     * GET /riiinglinks/{id}
     *
     * @param  int $id
     * @return json
     */
    public function show($id)
    {

        $riiinglink = $this->riiinglink->getRiiinglink($id);

        if($riiinglink){

            return $this->respondWithItem($riiinglink, new RiiinglinkTransformer);
        }

        return  $this->respondWithArray(array('data' => []));

    }
    /**
     * Return the specified label
     * PUT /riiinglinks/{id}
     *
     * @param  int  $id
     * @return json
     */
    public function update($id)
    {
        return $this->errorUnauthorized();
    }

    /**
     * Remove the specified riiinglink
     * DELETE /riiinglinks/{id}
     *
     * @param  int  $id
     * @return json
     */
    public function destroy($id)
    {

        if(!$this->riiinglink->deleteRiiinglink($id)){

            return $this->errorNotFound();
        }

        return  $this->respondWithArray(array('data' => "ok"));

    }

}