<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    User,
    VehicleDocument,
    VehicleImages,
    Type
};

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'model',
        'price',
        'assembler',
        'year',
        'setup',
        'is_new',
        'has_financing'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicle_document()
    {
        return $this->hasOne(VehicleDocument::class);
    }

    public function vehicle_images()
    {
        return $this->hasMany(VehicleImages::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
}
