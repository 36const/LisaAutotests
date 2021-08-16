<?php

namespace lisa\Helper;

class Users extends \Codeception\Module
{
    public function _beforeSuite($settings = []) {
        $this->getModule('Cli')->runShellCommand('php yii command/config-bus');
    }
}
