<?php

namespace App\Http\Controllers\Users;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehiclesController extends Controller
{
    public function index() : View
    {
        return view('dashboard.vehicles.index');
    }
}
