<?php 

namespace Dell\NsPsr4\Controllers\Client;

use Dell\NsPsr4\Commons\Controller;
// use Dell\NsPsr4\Commons\Helper;
// use Dell\NsPsr4\Models\User;

class HomeController extends Controller
{
    public function index() {
        $name = 'Tungph46171';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}