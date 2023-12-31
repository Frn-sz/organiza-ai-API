<?php

namespace App\Models\Task;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    use HasFactory;
    protected $table = 'task_status';

    public function tasks()
    {
        return $this->hasMany(Task::class, 'status_id');
    }
}
