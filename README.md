# Laravel 5.3 TCPDF

Forked from: [verwer/tcpdf-laravel](https://github.com/verwer/tcpdf-laravel)

## Installation

### Step 1
Require package using
```composer require lighth7015/tcpdf-laravel```

### Step 2
Add the service provider and aliases to `config/app.php`.
```php
'providers' => [
    //...
    Elibyy\TCPDF\ServiceProvider::class,
]

//...

'aliases' => [
    //...
    'PDF' => Elibyy\TCPDF\Facades\TCPDF::class
]
```

## Usage
Create a view in `resources/views/`. You can use all TCPDF methods with the `PDF` facade.

```php

```

Close each view with
```php
PDF::Show();
```

In your controller use
```php
return PDF::inline('path.to.view', compact('var1', 'var2'), 'OptionalFilename.pdf');
```
to show a PDF file inline, or
```php
return PDF::save('path.to.view', compact('var1', 'var2'), 'OptionalFilename.pdf');
```
to force the user to download the file.

For a list of all available function take a look at the [TCPDF Documentation](http://www.tcpdf.org/doc/code/classTCPDF.html)

## Configuration

Laravel-TCPDF comes with some basic configuration.
If you want to override the defaults, you can publish the config, like so:

    php artisan vendor:publish

Now access `config/tcpdf.php` to customize.
