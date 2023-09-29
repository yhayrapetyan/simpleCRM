<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\Task;
class Status extends Model
{
    use HasFactory;

    public function task()
    {
        return $this->hasMany(Task::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
