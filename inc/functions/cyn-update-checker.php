<?php
require(get_stylesheet_directory() . '/inc/libs/plugin-update-checker/plugin-update-checker.php');

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$updateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/cyandm/yasman_nikzad', //github theme
	get_stylesheet_directory(),
	'yasman_nikzad' //theme slug
);

//Set the branch that contains the stable release.
$updateChecker->setBranch('main');

//Optional: If you're using a private repository, specify the access token like this:
$updateChecker->setAuthentication('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');