<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function posts(){
        return $this->hasMany(Post::class) ;
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function role(){
        return $this->roles()->first()->name ;
    }
    public function assignRole($role) {
        if(is_string($role)){
            $role = Role::whereName($role)->firstOrFail();
        }
        $this->roles()->syncWithoutDetaching($role);

    }
    public function denyRole($role) {
        if(is_string($role)){
            $role = Role::whereName($role)->firstOrFail();
        }
        $this->roles()->detach($role);
        if(!$this->role()){
            $this->assignRole('guest');
        }
    }
    public function abilities(){
        return $this->roles->map->abilities->flatten()->pluck('name')->unique();
    }
    public function tags(){
        return $this->posts->map->tags->flatten()->unique('name');
    }
}
