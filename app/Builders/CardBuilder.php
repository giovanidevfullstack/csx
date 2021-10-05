<?php

namespace App\Builders;

use Illuminate\Support\Str;
use App\Models\{
    Sale,
    Vehicle
};

class CardBuilder
{
    private $cards = [];

    private $flag;

    public function total()
    {
        array_push($this->cards, [
            'value' => Str::currency(Sale::sum('total') / 100, $this->flag),
            'title' => 'total',
            'percent' => '15',
            'is_up' => true
        ]);
        return $this;
    }

    public function sales()
    {
        array_push($this->cards, [
            'value' => Sale::count(),
            'title' => 'Sales',
            'percent' => '2',
            'is_up' => true
        ]); 
        return $this;
    }

    public function vehicles()
    {
        array_push($this->cards, [
            'value' => Vehicle::count(),
            'title' => 'Vehicles',
            'percent' => '',
            'is_up' => true
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
