<?php

namespace lisa\Helper;

class Requests extends \Codeception\Module
{
    public function _beforeSuite($settings = []) {
        $this->getModule('TestHelper')->insertFixtureToDatabase('allUsers');
        $this->getModule('Cli')->runShellCommand('php yii command/config-bus');
    
        $this->getModule('AMQP')->declareQueue('lisa_sendMailNotifications', false, true, false, false);
        $this->getModule('AMQP')->declareQueue('lisa_sendOuterNotifications', false, true, false, false);
        $this->getModule('AMQP')->declareQueue('lisa_svRedistribution', false, true, false, false);
        $this->getModule('AMQP')->declareQueue('lisa_rzCategoriesExport', false, true, false, false);

        $this->getModule('AMQP')->declareExchange('default', 'direct', false, true, false);
        $this->getModule('AMQP')->declareQueue('lisa_saveFiles', false, true, false, false);
        $this->getModule('AMQP')->bindQueueToExchange('lisa_saveFiles', 'default', 'lisa_saveFiles');
    }
}
