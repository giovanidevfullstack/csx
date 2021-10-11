<?php

namespace App\Builders;

use Illuminate\Support\Str;
use App\Models\{
    Sale,
    Vehicle,
    User
};

class CardBuilder
{   
    /**
     * List of cards to be displayed in dashboard
     * @param array
     */
    private $cards = [];

    /**
     * The currency that will be used to convert a amount to currency
     * @param string
     */
    private $flag;

    public function total()
    {
        array_push($this->cards, [
            'value' => Str::currency(Sale::sum('total') / 100, $this->flag),
            'title' => 'total'
        ]);
        return $this;
    }

    public function sales()
    {
        array_push($this->cards, [
            'value' => Sale::count(),
            'title' => 'Sales'
        ]); 
        return $this;
    }

    public function vehicles()
    {
        array_push($this->cards, [
            'value' => Vehicle::count(),
            'title' => 'Vehicles'
        ]);
        return $this;
    }
    
    public function user()
    {
        array_push($this->cards, [
            'value' => User::count(),
            'title' => 'Users'
        ]);
        return $this;
    }

    public function log()
    {
        array_push($this->cards, [
            'value' => 12,
            'title' => 'Log'
        ]);
        return $this;
    }

    public function setFlag($flag){
        $this->flag = $flag;
        return $this;
    }

    public function get(){
        return $this->cards;
    }
}
