<?php

namespace App\Providers;

use App\Interface\CaseBaseInterface;
use app\Interface\ExampleInterface;
use App\Interface\GejalaInterface;
use App\Interface\HasilInterface;
use App\Interface\PenyakitSolusiInterface;
use App\Interface\RoleInterface;
use App\Interface\UserInterface;
use App\Repository\CaseBaseRepository;
use app\Repository\ExampleRepository;
use App\Repository\GejalaRepository;
use App\Repository\HasilRepository;
use App\Repository\PenyakitSolusiRepository;
use App\Repository\RoleRepository;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ExampleInterface::class, ExampleRepository::class);
        $this->app->bind(CaseBaseInterface::class, CaseBaseRepository::class);
        $this->app->bind(GejalaInterface::class, GejalaRepository::class);
        $this->app->bind(PenyakitSolusiInterface::class, PenyakitSolusiRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(RoleInterface::class, RoleRepository::class);
        $this->app->bind(HasilInterface::class, HasilRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
