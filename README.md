## Shamsi date Package for Laravel 4.2

### Installation
Add this package to your composer.json and run composer update.
"Majid/shamsi": "0.1.x",


Add the ServiceProvider to the providers array in app/config/app.php
'Majid\Shamsi\ShamsiServiceProvider'

feel free to use each function which is introduced here :
[jdf official web site](http://jdf.scr.ir/rahnama/?t=jadvalha)
just by this syntax :
```php
$myShamsiDate = Shamsi::toJalali($myObject->created_at);
```
and "$order->created_at" is just php date object.

the mentioned link also has documentation for each function to use.
