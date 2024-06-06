<?php 

namespace Dell\NsPsr4\Controllers\Client;

use Dell\NsPsr4\Commons\Controller;

class AboutController extends Controller
{
    public function index() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }
}