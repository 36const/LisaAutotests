<?php

namespace lisa\Helper;

class Settings extends \Codeception\Module
{
    public function _beforeSuite($settings = []) {
        $this->getModule('TestHelper')->insertFixtureToDatabase('allUsersWithoutSettings');
        $this->getModule('Cli')->runShellCommand('php yii command/config-bus');
    }
}
