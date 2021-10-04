<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Store,
    Type,
    Image
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

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
