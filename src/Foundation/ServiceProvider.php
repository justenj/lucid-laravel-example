<?php
namespace App\Foundation;

use App\Services\Website\Providers\WebsiteServiceProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
         $this->app->register(WebsiteServiceProvider::class);
    }
}
