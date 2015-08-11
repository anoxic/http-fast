<?php

function http($method, $uri, $content = null, $header = null, $other_options = null)
{
    $options = ['http'=>compact('method','content','header')];

    if (is_array($other_options)) $options += $other_options;

    $stream = fopen($uri, 'r', false, stream_context_create($options));
    $headers = stream_get_meta_data($stream)['wrapper_data'];
    $body = stream_get_contents($stream);

    return [fclose($stream), $headers, $body];
}

