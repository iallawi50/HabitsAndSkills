<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;
    protected $fillable = [
        'done',
        'none',
        'habit_id'
    ];
    public function habit()
    {
        return $this->belongsTo(Habit::class);
    }
}
