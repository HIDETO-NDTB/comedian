<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['name','slug','description','image','comment','user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    // ヒデト追加　いいね機能
    public function favorite_users()
    {
        return $this->belongsToMany(User::class,'post_user','post_id','user_id')->withTimestamps();
    }
}
