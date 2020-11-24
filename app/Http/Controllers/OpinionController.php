<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function index()
    {
        $opinions = App\Models\Opinion::all();
    }
}
