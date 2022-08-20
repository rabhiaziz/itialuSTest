<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $table= 'comments';
    protected $fillable = [
        'comment',
        'note_id',
        'user_id'
    ];

    public function note()
    {
        return $this->belongsTo(Note::class,'note_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
