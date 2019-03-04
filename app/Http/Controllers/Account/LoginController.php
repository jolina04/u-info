<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Services\MathServices;
use App\Services\AwesomeServiceInterface;

class LoginController extends Controller
{
    private $math;

    public function __construct()
    {
        $this->math = new MathServices();
    }

    public function index(){
        return $this->math->add(4,6);
    }

    public function doAwesome(AwesomeServiceInterface $awesome_service)
    {
        $awesome_service->doAwesomeThing();
        return 'okay';
    }
}
