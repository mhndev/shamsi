## Shamsi date Package for Laravel 4.2

### Installation
Add this package to your composer.json and run composer update.
"Majid/shamsi": "dev-master"


Add the ServiceProvider to the providers array in
```php
 app/config/app.php
```
```php
'Majid\Shamsi\ShamsiServiceProvider'
```
you can use each function which is introduced here :
[jdf official web site](http://jdf.scr.ir/rahnama/?t=jadvalha)
just by this syntax :
```php
$myShamsiDate = Shamsi::toJalali($myObject->created_at);
```
and
```php
 $order->created_at
```
 is just php date object.

the mentioned link also has documentation for each function to use.
feel free to comment and report the bugs which make this package more useful .

##License
this package was created by Majid Abdolhosseini and is released under the MIT License.

