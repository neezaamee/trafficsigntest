<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['qtxt', 'qimg', 'qaudio', 'category'];

    public function answers()
    {
        return $this->belongsToMany(Question::class, 'question_answers');
    }
}
