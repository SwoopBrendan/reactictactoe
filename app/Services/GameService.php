<?php

namespace App\Services;

use App\Game;
use App\Move;
use Illuminate\Support\Facades\Auth;
class GameService
{
    /**
     * Create new game instance
     */
    public function createGame()
    {
        return new Game();
    }

    /**
     * Get all game instances linked to the loged in user
     */
    public function getUsersGame()
    {
        return Game::user(Auth::user()->id);
    }
}