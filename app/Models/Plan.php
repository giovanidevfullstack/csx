<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Plan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'price',
        'init_at',
        'end_at',
        'is_auto_renew',
        'is_active'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
