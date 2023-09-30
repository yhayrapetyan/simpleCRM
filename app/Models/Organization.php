<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
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


}
