<?php 
require_once '../../../../vendor/autoload.php';
session_start();

use Gregwar\Captcha\CaptchaBuilder;
$builder = new CaptchaBuilder;
$builder->build();

$_SESSION['phrase'] = $builder->getPhrase();

// captcha image
echo $builder->inline(); 



?>