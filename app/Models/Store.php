<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    User,
    Vehicles,
    Address
};

class Store extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'register_number',
        'legal_name',
        'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }
}
