<?php

return [
    'enabled_social_providers' => explode(',', env('DARKNINE_ENABLED_SOCIAL_PROVIDERS')),
    'secret_key' => env('DARKNINE_SECRET_KEY', null)
];
