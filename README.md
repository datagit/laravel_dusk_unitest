# laravel_dusk_unitest
laravel_dusk_unitest
doc: https://laravel.com/docs/5.7/dusk
```bash
$ ~/.composer/vendor/bin/laravel new laravel_dusk_unitest
$ composer require --dev laravel/dusk
# following: https://www.sitepoint.com/laravel-dusk-intuitive-and-easy-browser-testing-for-all/
$ php artisan dusk:install
```

check connect to DB by tinker
```bash
$ php artisan tinker
    $ DB::connection()->getPdo();
# create auth
$ php artisan make:auth
# create table user
$ php artisan migrate
```
Let us now create our first Dusk test:
```bash
$ php artisan dusk:make LoginTest
# add your code: tests/Browser/LoginTest.php
$ php artisan dusk
#if failed: tests/Browser/screenshots/failure-Tests_Browser_LoginTest_test_I_can_login_successfully-0.png

```

