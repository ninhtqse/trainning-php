<?php

namespace Controllers;

use Core\Request;

class HomeController
{
    public function index(Request $request)
    {
        return 123;
    }

    public function test(Request $request)
    {
        return 1234;
    }
}