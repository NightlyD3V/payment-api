<?php 

return [
    'paths' => ['api/*'], // Paths to enable CORS for
    'allowed_methods' => ['*'], // Allowed HTTP methods (GET, POST, etc.)
    'allowed_origins' => ['localhost:5000'], // Replace with your frontend domain
    'allowed_origins_patterns' => [], // Regex patterns for origins
    'allowed_headers' => ['*'], // Allowed headers
    'exposed_headers' => [], // Headers exposed to the client
    'max_age' => 0, // Max age for preflight requests
    'supports_credentials' => false, // Allow credentials (cookies, authorization headers)
];