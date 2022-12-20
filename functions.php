<?php
require_once  __DIR__. "/vendor/autoload.php";
require_once __DIR__ . '/config.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

date_default_timezone_set("Africa/Johannesburg");

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), PRODUCTION, null, null, false);
$config->setProxyDir(__DIR__ . '/caches');

if (LOCAL) {
  $config->setAutoGenerateProxyClasses(true);
} else {
  $config->setAutoGenerateProxyClasses(false);
  $config->setAutoGenerateProxyClasses(true);
}
$db = EntityManager::create($conn, $config);
