<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register Interface and Repository in here
        // You must place Interface in first place
        // If you dont, the Repository will not get readed.
        $this->app->bind(
            'App\Interfaces\Lichess\AccountInfoInterface',
            'App\Repositories\Lichess\AccountInfoRepository'
        );

        //Arena tournaments Lichess Interface and Repository
        $this->app->bind(
            'App\Interfaces\Lichess\ArenaTournamentInterface',
            'App\Repositories\Lichess\ArenaTournamentRepository'
        );

        //Team Lichess Interface and Repository
        $this->app->bind(
            'App\Interfaces\Lichess\TeamLichessInterface',
            'App\Repositories\Lichess\TeamLichessRepository'
        );
    }
}
