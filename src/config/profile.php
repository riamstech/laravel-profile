<?php


return [
    /**
     * Middleware of the profile
     */
    'middleware' => ['auth'],
    /**
     * custom prefix
     */
    'route_prefix' => null,
    /**
     * As you wish spasifiy your model
     */
    'user_class' => \App\User::class,
    /**
     * Guard
     */
    'guard' => 'web',

];