<?php

function myAutoloader($className) {
    $path = "./" . $className . ".php";
    if (file_exists($path))
        require_once $path;
}
