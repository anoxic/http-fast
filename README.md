# http-fast
for when you want to http("POST", "http://example.com/api") without dependencies, or curl_set_opt() trailing a mile long

```php
list($sent, $headers, $body) = http('GET', 'http://example.com');
```

Internally, http-fast uses an HTTP stream resource. As a side affect of this, it can be restricted by [`allow_url_fopen`](http://php.net/manual/en/filesystem.configuration.php#ini.allow-url-fopen)

## Options

* `$method` (required) Can be OPTIONS, GET, HEAD, POST, PUT, DELETE or TRACE
* `$uri` (required) The request URI, using either `http` or `https` for the protocol
* `$content` (optional) The request body
* `$header` (optional) Any headers to send with the request
* `$other_options` (optional) Any extra [HTTP Context options](http://php.net/manual/en/context.http.php)
