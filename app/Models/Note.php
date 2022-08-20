<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kayandra\Hashidable\Hashidable;

class Note extends Model
{
    use SoftDeletes , Hashidable;
    protected $table= 'notes';
    protected $fillable = [
        'note',
        'is_public',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class,'note_id');
    }

}
