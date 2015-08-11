# http-fast

Sometimes you would rather not have yet another library, like libcurl and php5-curl, or the HTTP extension cluttering up your server, adding yet another thing to keep up-to-date. And even though cURL is very popular to use for HTTP requests in PHP, it's a little cumbersome, where you have to make a page full of `curl_set_opt()` and other odd calls just to get the headers and have sane HTTP options.

http-fast just uses built-in PHP facilities so you don't need to install anything extra. And the interface is a little more like the CLI version of cURL.

```php
list($sent, $headers, $body) = http('GET', 'http://example.com');
```

## Options

* `$method` (required) Can be OPTIONS, GET, HEAD, POST, PUT, DELETE or TRACE
* `$uri` (required) The request URI, using either `http` or `https` for the protocol
* `$content` (optional) The request body
* `$header` (optional) Any headers to send with the request
* `$other_options` (optional) Any extra [HTTP Context options](http://php.net/manual/en/context.http.php)

## Caveats

Internally, http-fast uses an HTTP stream resource. As a side affect of this, it can be restricted by [`allow_url_fopen`](http://php.net/manual/en/filesystem.configuration.php#ini.allow-url-fopen).

There is not, at this time, much error handling or validation that the parameters given are actually correct (as in the case of the `$method` or `$uri`.
