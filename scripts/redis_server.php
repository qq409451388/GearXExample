<?php
ini_set('date.timezone', 'Asia/Shanghai');
ini_set('memory_limit', "1000m");
ini_set("display_errors", true);
include(dirname(__FILE__, 3) . "/GearX/Application.php");
/**
 * php redis_server.php -PappPath=/home/release/GearXExample -PgearPath=/home/release/GearX -PconfigPath=/home/release/GearXExample/config
 */
Application::loadWebServer($argv);
(new EzResp("127.0.0.1", 6379))->start();
