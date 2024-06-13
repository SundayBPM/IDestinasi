<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'no_telp',
        'domisili',
        'gender',
        'usia',
        'personalisi'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

        /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    // protected function type(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) =>  ["wisatawan", "pengelola", "admin"][$value],
    //     );
    // }

    public function saran()
    {
        return $this->hasMany(Saran::class, 'id_user');
    }
    public function wishlists()
    {
        return $this->belongsToMany(Objek_Wisata::class, 'wishlists', 'user_id', 'objek_wisata_id');
    }

    // public function mengelola()
    // {
    //     return $this->hasOne(Mengelola::class, 'user_id');
    // }

    public function objekWisataDikelola()
    {
        return $this->hasOneThrough(Objek_Wisata::class, Mengelola::class, 'user_id', 'id', 'id', 'objek_wisata_id');
    }   

}
