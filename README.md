Mouf's Harmony module
=====================

This package contains a module that connects the Harmony user interface to the Mouf PHP framework.

Usage
-----

Include the package in your **composer.json**:

**composer.json**
```
{
  "require": {
    "harmony/mouf-module": "~2.0.0"
  }
}
```

*Note*: the module version must match the version of Mouf you are using.

Now, create a **modules.php** file at the root of your package and instantiate
the Mouf module:

**modules.php**
```php
<?php
return [
    new Harmony\Module\MoufModule();
];
```
