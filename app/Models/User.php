<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\CanRefer;
use App\Traits\CanManageCourses;
use App\Traits\CanPromoteProducts;
use App\Traits\CanShareContent;
use App\Traits\HasRoles;
use App\Traits\HasWallet;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use CanRefer;
    use CanShareContent;
    use CanPromoteProducts;
    use CanManageCourses;
    use HasRoles;
    use HasWallet;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'referral_code',
        'valid_id'
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

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_courses');
    }
    
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class,'recipient_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }
    
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function descendants($generation = 1)
    {
        if ($generation > 12) {
            return collect(); // Return empty collection if generation exceeds 12
        }
        
        $descendants = $this->hasManyThrough(
            User::class,
            Referral::class,
            'referrer_id', // Foreign key on referrals table
            'id', // Local key on users table
            'id', // Local key on referrals table
            'referred_id' // Foreign key on users table
        )->with('descendants'); // Eager load descendants recursively
        
        if ($generation > 1) {
            $descendants->with('descendants'); // Load descendants recursively
        }
        
        return $descendants->get()->flatMap(function ($user) use ($generation) {
            return $user->descendants($generation + 1);
        })->push($this); // Include current user in the descendants
    }

    public function postShareCounts()
    {
        return $this->hasMany(PostShareCount::class);
    }
}
