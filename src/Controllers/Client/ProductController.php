<?php 

namespace Dell\NsPsr4\Controllers\Client;

use Dell\NsPsr4\Commons\Controller;

class ProductController extends Controller
{
    public function index() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function detail($id) {
        echo __CLASS__ . '@' . __FUNCTION__ . '@' . $id;
    }
}