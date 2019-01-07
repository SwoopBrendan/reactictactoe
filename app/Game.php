<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'completed', 'user_id'
    ];

    /**
     * get game user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function gameUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    /**
     * get game moves
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function gameMoves()
    {
        return $this->hasMany('App\Move');
    }

    /**
     * Scope to return where games.user_id = logged in user id
     */
    public function scopeUser($query, $userId)
    {
        if (!is_null($userId)) {
            return $query->where('user_id', '=', $userId);
        }

        return $query;
    }
}
