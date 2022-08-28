<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'questions';

    public function question()
    {
        return $this->belongsTo(Question::class, 'parent_id', 'id');
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'parent_id', 'id');
    }
}
