<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index() : View
    {
        // abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('dashboard.admin.menus.index');
    }
}
