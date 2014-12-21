<?php

class SiteController extends BaseController {

    /**
     * Home page
     *
     * @return void
     */
    public function index()
    {
        return View::make('site/index');
    }

    /**
     * About page
     *
     * @return void
     */
    public function about()
    {
        return View::make('site/about');
    }

    /**
     * Contact page
     *
     * @return void
     */
    public function contact()
    {
        return View::make('site/contact');
    }

}
