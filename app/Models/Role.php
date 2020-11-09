<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function abilities(){
        return $this->belongsToMany(Ability::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function allowTo($ability){
        if(is_string($ability)){
            $ability = Ability::whereName($ability)->firstOrFail();
        }
        $this->abilities()->syncWithoutDetaching($ability);
        return $this;
    }
}
