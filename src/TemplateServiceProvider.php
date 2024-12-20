<?php
namespace  frontend\template;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
  
    public function register(): void
    {
        //
    }

   
    public function boot(): void
    {
        
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
   
         $this->loadViewsFrom(__DIR__ . '/../resources/views','pack');
 
         $this->publishes([ __DIR__.'/../template-assets' => public_path('template-assets'),
            
             ],'assets');
		
 

        $this->publishes(
            [__DIR__ . '/../resources/views' => resource_path('views'),],
            'views'
        );


        $this->publishes( [__DIR__ . '/../lang' => lang_path(''),],
           
            'lang'
        );


    //     $this->publishes([
    //         __DIR__.'/Http/Livewire' => app_path('Livewire'),
    //     ]);

    //     $this->publishes([
    //         __DIR__.'/Http/Middleware' => app_path('/Http/Middleware'),
    //     ]);






    
     }


    }
 
