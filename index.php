<?php

require 'vendor/autoload.php';
//entry points connects tp database and sends to router, 
//which will process it and send to routes
require 'core/connection.php';

require Router::load('routes.php')->direct(Request::uri(), Request::method());

