<?php

namespace lisa\Helper;

class Requests extends \Codeception\Module
{
    public function _beforeSuite($settings = []) {
        $this->getModule('TestHelper')->insertFixtureToDatabase('allUsers');
        $this->getModule('Cli')->runShellCommand('php yii command/config-bus');
    }
}
