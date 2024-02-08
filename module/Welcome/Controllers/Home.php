<?php

namespace Module\Welcome\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('Module\Welcome\welcome_message');
    }
}
