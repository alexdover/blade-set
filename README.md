## Laravel 4 Blade @set operator

A very simple blade extension which allows variables to be set.

Current version is for Laravel 4.2.

If you wish to use with Laravel 4.1, please use v1.0.2

### Example

```php
@set('my_variable', $existing_variable)
```

You can then use the variable `$my_variable` in the template.

You might choose to fetch a bunch of models from your template, for example

```php
@set('my_model_list', MyModel::where('something', '=', 1)->paginate(10))
```

### Why?

Compare

```php
<?php $my_model_list = MyModel::where('something', '=', 1)->paginate(10); ?>
```

to

```php
@set('my_model_list', MyModel::where('something', '=', 1)->paginate(10))
```

I felt that the use of the `@set` was a more elegant solution in the context of blade templates.

### Installation

Require this package in your `composer.json` and update composer. This will download the package.

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