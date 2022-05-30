<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comentario', 'mobile_id', 'user_id', 'parent_id'];

    public function mobile() {
        return $this->belongsTo(Mobile::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function parent() {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function replies() {
        return $this->hasMany(Comment::class, 'parent_id');
    }


    public function commentsMobile() {
        $cont = 0;
        foreach($this->mobile as $item) {
            $cont++;
        }
        return $cont;
    }
}
