<?php namespace Riiingme;

use Illuminate\Support\ServiceProvider;

use Riiingme\User\Entities\User;
use Riiingme\Label\Entities\Label;
use Riiingme\Meta\Entities\Meta;
use Riiingme\Type\Entities\Type;
use Riiingme\Groupe\Entities\Groupe;
use Riiingme\Riiinglink\Entities\Riiinglink;

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
        $this->registerLabelService();
        $this->registerTypeService();
        $this->registerGroupeService();
        $this->registerRiiinglinkService();
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
    protected function registerLabelService(){

        $this->app->bind('\Riiingme\Label\Repo\LabelInterface', function()
        {
            return new \Riiingme\Label\Repo\LabelEloquent(new Label);
        });
    }

    /**
     * Link metas
     */
    protected function registerMetaService(){

        $this->app->bind('\Riiingme\Meta\Repo\MetaInterface', function()
        {
            return new \Riiingme\Meta\Repo\MetaEloquent(new Meta);
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
    protected function registerRiiinglinkService(){

        $this->app->bind('\Riiingme\Riiinglink\Repo\RiiinglinkInterface', function()
        {
            return new \Riiingme\Riiinglink\Repo\RiiinglinkEloquent(new Riiinglink);
        });
    }
}