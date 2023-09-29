<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Role;

class Ability extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_abilities');
    }

    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_abilities');
    }
}
