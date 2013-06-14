<?php

define('PHPEXCEL_ROOT', dirname(__FILE__) . '/');
require_once PHPEXCEL_ROOT.'/PHPExcel.php';

class PHPExcel_Base extends PHPExcel {}

// not sure why this helps.... auotloader fails on it..
require_once PHPEXCEL_ROOT.'/ReferenceHelper.php';
