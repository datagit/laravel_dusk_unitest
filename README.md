# laravel_dusk_unitest
laravel_dusk_unitest
- https://laravel.com/docs/5.7/dusk
- https://laravel.com/docs/5.7/database-testing
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

test Database
```bash
# tests/Unit/ExampleDatabaseTest.php
$  ./vendor/bin/phpunit tests/Unit/ --testdox
```

output
```bash
Unit\ExampleDatabase
 ✔ DatabaseHas users by email
 ✔ DatabaseMissing users by email

Unit\Example
 ✔ Basic condition true

Time: 235 ms, Memory: 12.00MB
```

https://phpunit.de/manual/6.5/en/appendixes.annotations.html#appendixes.annotations.covers.tables.annotations

https://phpunit.de/manual/6.5/en/fixtures.html
```bash
$ ./vendor/bin/phpunit tests/Unit/
    Tests\Unit\TemplateMethodsTest::setUpBeforeClass
    Tests\Unit\TemplateMethodsTest::setUp
    Tests\Unit\TemplateMethodsTest::assertPreConditions
    Tests\Unit\TemplateMethodsTest::testOne
    Tests\Unit\TemplateMethodsTest::assertPostConditions
    Tests\Unit\TemplateMethodsTest::tearDown
    .Tests\Unit\TemplateMethodsTest::setUp
    Tests\Unit\TemplateMethodsTest::assertPreConditions
    Tests\Unit\TemplateMethodsTest::testTwo
    Tests\Unit\TemplateMethodsTest::tearDown
```
make model
```bash

$ php artisan make:model Post --factory --migration
$ php artisan make:seeder UsersTableSeeder
$ php artisan make:seeder PostsTableSeeder
$ php artisan migrate
$ php artisan db:seed


```
