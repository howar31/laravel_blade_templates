# Laravel Blade Templates

This project provides several Laravel blade templates for Laravel development, including:

* Admin

*Note: This project was developed under Laravel 5.6.3 which needs PHP 7.0+*

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

**Please note that `--force` WILL EARSE ALL YOUR EXISTING FILES in the destination.**

3. The templates are now in `resource\assets`, and routes are in `routes\web.php`, and images are in `public\images`.
4. Execute `npm run production` to compile the assets. (`npm run dev` for development)
5. The templates are now ready to use!

## Note
* To update the package:  
```bash
composer update howar31/blades
```
