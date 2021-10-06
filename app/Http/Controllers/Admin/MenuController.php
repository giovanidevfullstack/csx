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
        $allMenus = Menu::all();
        return view('dashboard.admin.menus.index', compact('allMenus'));
    }
}
