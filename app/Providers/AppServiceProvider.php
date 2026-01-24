<?php

namespace App\Providers;

use App\Models\Task;
use App\Models\User;
use App\Observers\TaskObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('edit-task', function (User $user, Task $task) {
            return $task->user->is($user);
        });

        Task::observe(TaskObserver::class);
    }
}
