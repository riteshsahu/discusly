<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar_path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * make route model binding to use 'name' column instead of
     * 'id' column to retrieve the model class
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'name'; // TODO: Change the autogenerated stub
    }

    /**
     * A user has many threads
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function threads()
    {
        return $this->hasMany(Thread::class)->latest();
    }

    public function lastReply()
    {
        // trick
        return $this->hasOne('App\Reply')->latest();
    }

    public function activity()
    {
        return $this->hasMany('App\Activity');
    }

    public function isAdmin()
    {
        return in_array($this->name, ['Ritesh', 'ElonMusk']);
    }

    public function read($thread)
    {
        // user visited the thread
        cache()->forever(
            $this->visitedThreadCacheKey($thread),
            Carbon::now()
        );
    }

    public function getAvatarPathAttribute($avatar)
    {
        return asset('storage/' . ($avatar ?: 'avatars/default.png'));
    }

    public function visitedThreadCacheKey($thread)
    {
        return sprintf("users.%s.visits.%s", $this->id, $thread->id);
    }
}
