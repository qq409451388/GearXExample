<?php

ini_set('date.timezone', 'Asia/Shanghai');
ini_set('memory_limit', "1000m");
ini_set("display_errors", true);
include(dirname(__FILE__, 3) . "/GearX/Application.php");
/**
 * php http_server.php -PappPath=/home/release/GearXExample -PgearPath=/home/release/GearX -PconfigPath=/home/release/GearXExample/config
 * php http_server.php -PappPath=D:/dev/GearXExample -PgearPath=D:/dev/GearX -PconfigPath=D:/dev/GearXExample/config
 */
Application::loadWebServer($argv);
(new EzHttp())->start();

