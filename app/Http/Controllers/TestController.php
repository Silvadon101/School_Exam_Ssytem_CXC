<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getLastName()
    {
        return splitname("Jack Daniels");
    }
}
