<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    public function creator() : BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    // public function creator() : BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }
    
    public function attendees() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'attendees');
    }

    public function member() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'members');
    }

    
}
