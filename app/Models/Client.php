<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organization;
use App\Models\Project;
class Client extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'phone',
        'organization_id',
    ];
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
