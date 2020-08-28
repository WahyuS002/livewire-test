<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class TestController extends Controller
{
    public function index()
    {
        return view('pages.test');
    }
}
