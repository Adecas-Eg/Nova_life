<?php

namespace App\Models;

use App\Events\CommentEvent;
use App\Notifications\CommentNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    public function casa()
    {
        return $this->belongsTo('App\Models\Casa');
    }



    protected $fillable = ['comment'];
}
