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
        
        // $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
   
        //  $this->loadViewsFrom(__DIR__ . '/../resources/views','pack');

        //  $this->loadTranslationsFrom(__DIR__ .'/../lang','pack');

         
         $this->publishes([ __DIR__.'/../template-assets' => public_path('template-assets'),
            
             ],'assets');
		
 

        $this->publishes(
            [__DIR__ . '/../resources/views' => resource_path('views'),],
            'views'
        );


        $this->publishes( [__DIR__ . '/../lang' => lang_path(''),],
           
            'lang'
        );

       $this->publishes(
                [__DIR__ . '/../config/laravellocalization.php' => config_path('laravellocalization.php'),],
                'config'
            );

            $this->publishes([__DIR__.'/../routes/test.php'=>base_path('routes/test.php'),
            'routes']);

    
       

     }
 


    }
 
