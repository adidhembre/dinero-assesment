<?php

$MIDDLWARE = ['api'];

$MIDDLWARE_CUSTOM = ['auth'];

$ROUTES = [
    'add-user' => ['UserController','addUser'],
    'validate-user' => ['UserController','validateUser'],
    'save-application' => ['ApplicationController','save', $MIDDLWARE_CUSTOM],
    'get-list' => ['RecruiterController','getList', $MIDDLWARE_CUSTOM],
];