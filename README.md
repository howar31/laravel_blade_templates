# Laravel Blade Templates

This project provides several Laravel blade templates for Laravel development, including:

* Admin

You can install these templates by using composer (see below), or simply copy the files you need into your project.

## Demo

http://lab.howar31.com/template/

## Requirements

This project was developed under:

* Laravel 5.6.3
* PHP 7.0 (required by Laravel 5)
* Node.js 9.8.0
* npm 5.7.1
* jQuery 3.3.1 (included)
* Bootstrap 4.0 (included)
* Popper.js (included in Bootstrap Bundle)
* Font Awesome 5.0.7 Free SVG (included)

## General Usage

1. Add custom repository:  
Edit `composer.json` in your Laravel project root and add below in `repositories` section:  
```json
    "repositories": [
        {
            "type": "git",
            "url": "git@github.com:howar31/laravel_blade_templates.git"
        }
    ],
```

2. Add package to require:  
Edit `composer.json` in your Laravel project root and add below in `require` section:  
```json
    "require": {
        "howar31/blades": "dev-master"
    },
```

3. Update composer packages:  
Execute `composer update howar31/blades` in console
4. Add Providers in `providers[]` array in `config/app.php`  
```php
    'providers' => [
        // Howar31\Blades Provider
        Howar31\Blades\BladesServiceProvider::class,
    ],
```

5. Publish all template files
```bash
php artisan vendor:publish --provider="Howar31\Blades\BladesServiceProvider"
composer dump-autoload
```

6. Update npm
```bash
npm install
```

7. Execute `npm run production` to compile the assets.


## Template Specific Usage

Following instruction includes usage for each type of templates.

### Admin
1. To publish only Admin templates, execute:
```bash
php artisan vendor:publish --provider="Howar31\Blades\BladesServiceProvider" --tag=admin
```

2. If you want to replace the files in `resource\assets`, add `--force` in your command:
```bash
php artisan vendor:publish --provider="Howar31\Blades\BladesServiceProvider" --tag=admin --force
```

**Please note that `--force` WILL REPLACE ALL YOUR EXISTING FILES at the destination.**

3. The templates are now in `resource\assets`, and routes are in `routes\web.php`, and images are in `public\images`, and configs are in `config`.
4. Execute `npm run production` to compile the assets. (`npm run dev` for development)
5. The templates are now ready to use!

## Note
* To update the package:  
```bash
composer update howar31/blades
```

* Build failed after Laravel-Mix 4.0

  Due to change from node-sass to dart-sass in laravel-mix 4.0 release, the bootstrap-material-design scss might build fail while `npm run production` or `npm run development`.  To fall back to node-sass, please edit your webpack.mix.js:
```js
mix.sass('resources/sass/app.sass', 'public/css', {
    implementation: require('node-sass')
});
```

more info: https://laravel-news.com/laravel-mix-4-released
