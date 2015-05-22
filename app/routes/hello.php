<?php

$app->get("/:name", function($name = "World") use ($app) {

	$app->render("hello.twig", ["name" => $name]);

});