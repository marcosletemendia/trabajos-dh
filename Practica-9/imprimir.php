<?php

var_dump($_POST);

foreach ($_POST as $key => $value) {
  echo "$value <br>";
}

var_dump(getallheaders());

var_dump($_SERVER);

var_dump($_FILES);

var_dump($_REQUEST);

var_dump($_SESSION);

var_dump($_COOKIE);

var_dump($GLOBALS);
