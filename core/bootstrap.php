<?php

use core\App;
require "functions.php";
App::bind("config",require "config.php");

App::bind("database", new Query(
    Connection::make(App::get("config")['database'])
));

?>