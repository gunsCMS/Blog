<?php


namespace gunsCMS\Blog;


use Illuminate\Support\ServiceProvider;

class BlogBaseServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {

    }

    /**
     *
     */
    public function register()
    {
        $this->registerResources();
    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}