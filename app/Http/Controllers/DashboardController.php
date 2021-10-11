<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Builders\CardBuilder;

class DashboardController extends Controller
{
    public function index() : View
    {
        $cards = (new CardBuilder)
            ->setFlag('BRL')
            ->total()
            ->sales()
            ->vehicles()
            ->get();
            
        return view('dashboard.store.index', compact('cards'));
    }
}
