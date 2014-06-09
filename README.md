## Laravel 4 Blade @set operator

A very simple blade extension which allows variables to be set.

## Example

```php
@set('my_variable', $existing_variable)
```

## Installation

Require this package in your `composer.json` and update composer. This will download the package and PHPExcel of PHPOffice.

```php
"alexdover/blade-set": "1.*"
```

After updating composer, add the ServiceProvider to the providers array in `app/config/app.php`

```php
'Alexdover\BladeSet\BladeSetServiceProvider',
```

All done!

### Licence
 
You can use this package under the [MIT license](http://opensource.org/licenses/MIT)

### Feedback

If you have any questions, feature requests or constructive ctritcism then please get in touch.

Twitter - [@alexdover](http://twitter.com/alexdover)