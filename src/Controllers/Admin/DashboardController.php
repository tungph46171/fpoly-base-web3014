<?php

namespace Dell\NsPsr4\Controllers\Admin;

use Dell\NsPsr4\Commons\Controller;
use Dell\NsPsr4\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}