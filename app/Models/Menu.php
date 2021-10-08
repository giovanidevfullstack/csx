<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'name',
        'icon',
        'route',
        'new_msgs',
        'is_admin',
        'is_active'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeUser($query)
    {
        return $query->where('is_admin', '!=', 1)
                        ->orWhereNull('is_admin')
                        ->orWhere('is_admin', false);
    }

    public function scopeAdmin($query)
    {
        return $query->where('is_admin', 1);
    }
}
