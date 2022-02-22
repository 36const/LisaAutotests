<?php

namespace lisa\Helper;

class OtherServices extends \Codeception\Module
{
    public function _beforeSuite($settings = []) {
        $this->getModule('TestHelper')->insertFixtureToDatabase('allUsers');
        $this->getModule('Cli')->runShellCommand('php yii command/config-bus');
        
        $this->getModule('AMQP')->declareQueue('lisa_failedApiRequests', false, true, false, false);
        $this->getModule('AMQP')->declareQueue('lisa_sendOuterNotifications', false, true, false, false);
    }
}
