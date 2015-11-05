<?php

// INCLUDE THE FILES NEEDED...
require_once("models/Scraper.php");
require_once("views/LayoutView.php");
require_once("views/ScraperView.php");
require_once("controllers/ScraperController.php");

// INIATIATE OBJECTS AND DO DEPENDECY INJECTION...
$m = new Scraper();
$v = new ScraperView();
$c = new ScraperController($m, $v);

// START THE WEB AGENT SCRAPER...
$c->doWebsiteScraperService();

// GENERATE THE OUTPUT...
$lv = new LayoutView();
$lv->render($v);