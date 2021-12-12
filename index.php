<?php

use Admin\admin;
use auth\register;

require "./vendor/autoload.php";

$admin = new admin();
$admin->adminfunc();

$registerclass = new register();
$registerclass->registerfunc();

validatefunc();
