<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'title',
        'due_date',
        'completed'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}