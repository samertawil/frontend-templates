- composer require laravel-frontend/templates:dev-main
- frontend\template\TemplateServiceProvider::class,
- php artisan vendor:publish --provider="frontend\template\TemplateServiceProvider"

- ->withMiddleware(function (Middleware $middleware) {
  $middleware->alias([
          'localize'                => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
          'localizationRedirect'    => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
          'localeSessionRedirect'   => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
          'localeCookieRedirect'    => \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
          'localeViewPath'          => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class,
      ]);
  })
  
 * php artisan make:livewire Test  // for test
 
 
* Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], function(){
    

    Route::get('test',Test::class);

    
  });
 

 * #[Layout('components.layouts.metronic7-app')]
 
 * php artisan livewire:publish --config
 
* Route::post('/logout',function() {
    return 'code is here';
})->name('logout');
