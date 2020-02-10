<?php

namespace App\Http\Controllers;

use App\Facades\Super;
use Illuminate\Http\Request;
use App\Contracts\SuperContract;
use App\Components\SuperComponent;
use Zhylinskiy\Meta\Meta;

class TestController extends Controller
{
    /*public function testProvider()
    {
        return view('provider');
    }

    public function TestContract(SuperContract $component)
    {
        return $component->getName();
    }*/

    public function testNewPackage()
    {
       return Meta::getPropertyValue();
    }
}