<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'file_path'];

    public function event() : BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
 