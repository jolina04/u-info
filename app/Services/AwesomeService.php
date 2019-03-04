<?php
/**
 * Created by PhpStorm.
 * User: Jed
 * Date: 3/4/2019
 * Time: 9:32 AM
 */

namespace App\Services;

use App\Services\AwesomeServiceInterface;


class AwesomeService implements AwesomeServiceInterface
{
    public function doAwesomeThing()
    {
        echo 'do awesome things!!!';
    }
}
