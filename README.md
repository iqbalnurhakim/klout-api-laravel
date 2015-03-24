# Simple Klout Api For Laravel 5

Laravel 5 Implementation of [KloutAPIv2](https://github.com/robertholf/KloutAPIv2-PHP)

## Install

Via Composer

``` bash
$ composer require iqbal-hakim/klout
```

Add the service provider to ```config/app.php``` in the `providers` array.

```php
'IqbalHakim\Klout\KloutServiceProvider'
```

If you want you can use the [facade](http://laravel.com/docs/facades). Add the reference in ```config/app.php``` to your aliases array.

```php
'Klout' => 'IqbalHakim\Klout\Facades\Klout',
```

## Configuration

You'll need to publish the package to start the configuration.

```bash
php artisan vendor:publish
```

This will create a `config/klout_config.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.


## Usage

``` php
Klout::KloutIDLookupById(<network>, <id>);

Klout::KloutUserScore(<kloutId>);
```
## License

The MIT License (MIT). Please see [License File](https://github.com/dnoegel/php-xdg-base-dir/blob/master/LICENSE) for more information.
