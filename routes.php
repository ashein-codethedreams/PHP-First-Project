<?php

use controllers\PagesController;

$router->get("",[PagesController::class,"home"]);
$router->get("about",[PagesController::class,"about"]);
$router->post("names",[PagesController::class,"createUsers"]);

?>