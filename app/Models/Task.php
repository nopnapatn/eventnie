<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'email'];

 public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email'); // ระบุความสัมพันธ์ด้วย email
    }
}

