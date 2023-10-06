<?php

namespace App\Providers;

use App\Repositories\NotebookRepository;
use App\Repositories\NotebookRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(NotebookRepositoryInterface::class, NotebookRepository::class);
    }
}
