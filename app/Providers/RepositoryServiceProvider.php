<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\QuestionContract;
use App\Repositories\QuestionRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        QuestionContract::class         =>          QuestionRepository::class,
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
