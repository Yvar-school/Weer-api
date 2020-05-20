<?php

$production_mode = false;




if($production_mode) {
    error_reporting(0);
    ini_set('display_errors', 0);
}