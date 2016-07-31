# get-browser
Get a browser's information.

```php
use Jstewmc\GetBrowser;

// define a request service
$request = new class implements Request {
    public function getIp()
    {
        return '1.2.3.4';
    }
    
    public function getUserAgent()
    {
        return 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) '
            . 'AppleWebKit/601.6.17 (KHTML, like Gecko) Version/9.1.1 '
            . 'Safari/601.6.17';
    }
};

// get the browser
$browser = (new Get($request))();

// return the request's browser information
$browser->getName();      // returns "Safari"
$browser->getVersion();   // returns "9.1.1"
$browser->getPlatform();  // returns "Macintosh"
$browser->getIp();        // returns "1.2.3.4"
```

This library uses the lightweight [donatj/phpuseragentparser](https://github.com/donatj/PhpUserAgent) library. Unlike PHP's native [get_browser()](http://php.net/manual/en/function.get-browser.php) function which requires a separate `browscap.ini` file, the Php User Agent library uses regex to determine a browser's _name_, _version_, and _platform_.

This library adds some simple validation and provides an object-oriented approach to accessing the browser's information.

## License

[MIT](https://github.com/jstewmc/get-browser/blob/master/LICENSE)

## Author

[Jack Clayton](clayjs0@gmail.com)

## Version

### 0.1.0, July 31, 2016

* Initial release
