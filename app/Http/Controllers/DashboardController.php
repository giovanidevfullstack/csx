<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Builders\CardBuilder;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index() : View
    {
        $cards = Gate::allows('only-admin') ? $this->getAdminCards() : $this->getUserCards();
            
        return view('dashboard.store.index', compact('cards'));
    }

    private function getUserCards() : array
    {
        return (new CardBuilder)
            ->setFlag('BRL')
            ->total()
            ->sales()
            ->vehicles()
            ->get();
    }

    public function getAdminCards() : array
    {
        return (new CardBuilder)
            ->setFlag('BRL')
            ->user()
            ->log()
            ->total()
            ->sales()
            ->vehicles()
            ->get();
    }
}
