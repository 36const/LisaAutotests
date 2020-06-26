<?php

use rzk\FixtureController;
use rzk\GlobalFixtureController;

FixtureController::setFixtureDir(__DIR__ . '/fixtures/template/');
GlobalFixtureController::setFixtureDir(__DIR__ . '/fixtures/global/');
