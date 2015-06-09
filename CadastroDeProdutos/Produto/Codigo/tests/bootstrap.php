<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', 1);

@session_start();

require_once __DIR__.'/../include/desconto.php';
