<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Project;
class Organization extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'website',
        'address',
        'description'
    ];
    public function client()
    {
        return $this->hasMany(Client::class);
    }

    public function project()
    {
        return $this->hasManyThrough(Project::class, Client::class);
    }

}
