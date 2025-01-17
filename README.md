
## About  library

laravel-frontend/templates library base on PHP Laravel framework, contains 3 Responsive_Admin_Dashboard_Template (Metronic_7.0.7,VALEX - HTML5 Bootstrap Admin Template V1,SB Admin v7.0.7 )   
development by "samer tawil"  eng.samertawil@gmail.com 

## require to run
<pre><span>"require": {
        "php": "^8.2",
        "laravel/framework": "^11.31",
        "laravel/tinker": "^2.9",
        "livewire/livewire": "^3.5",
        "mcamara/laravel-localization": "^2.2"
    },</span></pre>
 
 
## Installation
You can install the package via composer:

<pre><span>composer require laravel-frontend/templates</span></pre>

## Register package
<pre><span>frontend\template\TemplateServiceProvider::class,</span></pre>

 
## publish
<pre><span>php artisan vendor:publish --provider="frontend\template\TemplateServiceProvider"</span></pre>
<pre><span>php artisan livewire:publish --config</span></pre>


## Register middleware
<pre><span>->withMiddleware(function (Middleware $middleware) {
  $middleware->alias([
          'localize'                => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
          'localizationRedirect'    => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
          'localeSessionRedirect'   => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
          'localeCookieRedirect'    => \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
          'localeViewPath'          => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class,
      ]);
  })</span></pre>
  
## Test
<pre><span>php artisan make:livewire Test</span></pre>
<pre><span>Route::get('test',Test::class);</span></pre>
<pre><span>Route::post('/logout',function() {
    return 'code is here';
})->name('logout');</span></pre>

## Overwrite layout path  from config.livewire  
<pre><span>#[Layout('components.layouts.metronic7-simple-app')]</span></pre>
 


## Route with LaravelLocalization
<pre><span>Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
  ], function(){
    
	// Route is here
    
  });</span></pre>
 


 

