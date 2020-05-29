<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use app\User;

class Question extends Model
{
    public function user(){

       return $this->belongsTo(User::class);
    }

    public function Category(){

       return $this->belongsTo(Category::class);
    }

    public function replies(){

       return $this->hasMany(Reply::class);
    }
}
