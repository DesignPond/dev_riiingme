<?php namespace Riiingme;

use Illuminate\Support\ServiceProvider;

use Riiingme\User\Entities\User;
use Riiingme\Meta\Entities\Meta;
use Riiingme\Meta\Entities\Riiinglink_meta;
use Riiingme\Type\Entities\Type;
use Riiingme\Groupe\Entities\Groupe;
use Riiingme\Link\Entities\Riiinglink;

class RiiinglinkServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUserService();
        $this->registerMetaService();
        $this->registerMetalinkService();
        $this->registerTypeService();
        $this->registerGroupeService();
        $this->registerLinkService();
    }

    /**
     * User
     */
    protected function registerUserService(){

        $this->app->bind('\Riiingme\User\Repo\UserInterface', function()
        {
            return new \Riiingme\User\Repo\UserEloquent(new User);
        });
    }

    /**
     * Metas
     */
    protected function registerMetaService(){

        $this->app->bind('\Riiingme\Meta\Repo\MetaInterface', function()
        {
            return new \Riiingme\Meta\Repo\MetaEloquent(new Meta);
        });
    }

    /**
     * Link metas
     */
    protected function registerMetalinkService(){

        $this->app->bind('\Riiingme\Meta\Repo\LinkmetaInterface', function()
        {
            return new \Riiingme\Meta\Repo\LinkmetaEloquent(new Riiinglink_meta);
        });
    }

    /**
     * Types
     */
    protected function registerTypeService(){

        $this->app->bind('\Riiingme\Type\Repo\TypeInterface', function()
        {
            return new \Riiingme\Type\Repo\TypeEloquent(new Type);
        });
    }

    /**
     * Groupe
     */
    protected function registerGroupeService(){

        $this->app->bind('\Riiingme\Groupe\Repo\GroupeInterface', function()
        {
            return new \Riiingme\Groupe\Repo\GroupeEloquent(new Groupe);
        });
    }

    /**
     * Riiinglink
     */
    protected function registerLinkService(){

        $this->app->bind('\Riiingme\Link\Repo\LinkInterface', function()
        {
            return new \Riiingme\Link\Repo\LinkEloquent(new Riiinglink);
        });
    }
}