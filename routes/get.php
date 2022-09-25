<?php

$MIDDLWARE = ['get'];
$MIDDLWARE_AVOID = ['','login','signup','logout','unauthorised'];

$MIDDLWARE_CUSTOM_1 = ['logged_in'];
$MIDDLWARE_CUSTOM_2 = ['auth'];

$ROUTES = [
    'signup' => ['UserController','signup',$MIDDLWARE_CUSTOM_1],
    'login' => ['UserController','login', $MIDDLWARE_CUSTOM_1],
    'logout' => ['UserController','logout'],
    'application' => ['ApplicationController','edit',$MIDDLWARE_CUSTOM_2],
    'list' => ['RecruiterController','list',$MIDDLWARE_CUSTOM_2],
    'profile/{$id}' => ['RecruiterController','profile',$MIDDLWARE_CUSTOM_2],
    'unauthorised' => ['UserController','unauthorised'],
    '' => ['UserController','index'],
];