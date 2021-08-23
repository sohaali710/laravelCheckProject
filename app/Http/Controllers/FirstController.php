<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function showString()
    {
        return 'String';
    }
}