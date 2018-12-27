<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Faker', function($app){
            $faker = \Faker\Factory::create();

            $newClass = new class($faker) extends \Faker\Provider\Base {
                public function role()
                {
                    $roles = ['User', 'Admin'];

                    return $roles[array_rand($roles)];
                }
            };

            $faker->addProvider($newClass);
            return $faker;

        });
    }
}
