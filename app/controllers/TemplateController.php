<?php

class TemplateController extends BaseController {

    /**
     * @Get("cardlinked")
     */
    public function card()
    {
        return view('templates.card');
    }

}
