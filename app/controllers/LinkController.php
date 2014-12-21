<?php

use App\Api\Worker\LinkWorker;
use App\User\Repo\UserInterface;
use App\Api\Helpers\ApiHelper;

class LinkController extends BaseController {

    protected $user;
    protected $worker;

    public function __construct(UserInterface $user, LinkWorker $worker )
    {
        $this->user      = $user;
        $this->worker    = $worker;
        $this->apiHelper = new ApiHelper;
    }

    /**
     * @Get("/link/{id}")
     */
    public function show($id)
    {
        $user       = $this->user->find(1);
        $link       = $this->worker->riinglink(1);
        $types      = $this->worker->getTypes();
        $groupes    = $this->worker->dispatchGroups($link);
        $riiinglink = $this->worker->prepareLink($link);
        $metaUsed   = $this->worker->metaUsage($link);

        return view('site.show')->with(array('user' => $user, 'types' => $types, 'link' => $link, 'groupes' => $groupes , 'types' => $types , 'riiinglink' => $riiinglink , 'metaUsed' => $metaUsed ));
    }

    /**
     * @Get("/test/{id}")
     */
    public function test($id)
    {
        $user  = $this->user->find($id);

        $link       = $this->worker->riinglink(1);
        $types      = $this->worker->getTypes();
        $groupes    = $this->worker->dispatchGroups($link);
        $riiinglink = $this->worker->prepareLink($link);
        $metas      = $this->worker->dispatchGroupsMeta($user->metas);
        $usedMetas  = $this->worker->usedMetas($link);

        return view('site.test')->with(
            array(
               'metas'      => $metas,
               'types'      => $types,
               'link'       => $link,
               'groupes'    => $groupes ,
               'types'      => $types ,
               'riiinglink' => $riiinglink,
                'usedMetas' => $usedMetas
            )
        );
    }

}
