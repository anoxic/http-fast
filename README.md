# http-fast
for when you want to http("POST", "http://example.com/api") without dependencies, or curl_set_opt() trailing a mile long

```php
list($sent, $headers, $body) = http('GET', 'http://example.com');
```

Internally, http-fast uses an HTTP stream resource. A little like file_get_contents

## Options

* `$method` (required) Can be OPTIONS, GET, HEAD, POST, PUT, DELETE or TRACE
* `$uri` (required) The request URI, using either `http` or `https` for the protocol
* `$content` (optional) The request body
* `$header` (optional) Any headers to send with the request
* `$other_options` (optional) Any extra [HTTP Context options](http://php.net/manual/en/context.http.php)
