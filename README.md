# laravel_dusk_unitest
laravel_dusk_unitest
doc: https://laravel.com/docs/5.7/dusk
```bash
$ ~/.composer/vendor/bin/laravel new laravel_dusk_unitest
$ composer require --dev laravel/dusk
# following: https://www.sitepoint.com/laravel-dusk-intuitive-and-easy-browser-testing-for-all/
$ php artisan dusk:install
```

```bash
#check connect to DB by tinker
$ php artisan tinker
    $ DB::connection()->getPdo();
# create auth
$ php artisan make:auth
# create table user
$ php artisan migrate
```
