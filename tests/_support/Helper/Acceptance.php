<?php

namespace lisa\Helper;

class Acceptance extends \Codeception\Module
{
    public function _beforeSuite($settings = []) {
        $this->getModule('TestHelper')->insertFixtureToDatabase('allUsers');
        $this->getModule('TestHelper')->insertFixtureToDatabase('allSplitterUsers');
        $this->getModule('Cli')->runShellCommand('php yii command/config-bus');
    }
}
