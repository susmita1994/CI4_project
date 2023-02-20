<?php

namespace Modules\Mypanel\Controllers;

use App\Controllers\BaseController;

class MypanelController extends BaseController
{
    public function index()
    {
        echo "<h4>Coming soon...</h4>";
    }

    public function test()
    {
        return view('\Modules\Mypanel\Views\test');
    }
}
