<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Store,
    UserDocument,
    UserConfig,
    Address,
    Vehicle
};

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }    

    public function user_document()
    {
        return $this->hasOne(UserDocument::class);
    }

    public function user_config()
    {
        return $this->hasOne(UserConfig::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
    
}
