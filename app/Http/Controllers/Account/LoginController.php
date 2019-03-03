<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Services\MathServices;

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
}
