<?php

return [
    'driver' => 'database',
    'connection' => 'pacote',
    'table' => 'sessions',
    'lifetime' => 120,
    'expire_on_close' => true,
    'encrypt' => true,
    'cookie' => 'pacote_session',
    'path' => '/',
    'domain' => null,
    'secure' => true,
    'http_only' => true,
    'same_site' => 'lax',
];