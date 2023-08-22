<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'creator_email', 'assignee_email'];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_email', 'email');
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assignee_email', 'email');
    }
}

