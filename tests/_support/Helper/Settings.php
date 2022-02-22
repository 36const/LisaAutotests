<?php

namespace lisa\Helper;

class Settings extends \Codeception\Module
{
    public function _beforeSuite($settings = []) {
        $this->getModule('TestHelper')->insertFixtureToDatabase('allUsersWithoutSettings');
        $this->getModule('Cli')->runShellCommand('php yii command/config-bus');

        $this->getModule('AMQP')->declareExchange('default', 'direct', false, true, false);
        $this->getModule('AMQP')->declareQueue('lisa_rzCategoriesExport', false, true, false, false);
        $this->getModule('AMQP')->bindQueueToExchange('lisa_rzCategoriesExport', 'default', 'lisa_rzCategoriesExport');

        $this->getModule('AMQP')->declareExchange('default', 'direct', false, true, false);
        $this->getModule('AMQP')->declareQueue('lisa_rzCategoriesImport', false, true, false, false);
        $this->getModule('AMQP')->bindQueueToExchange('lisa_rzCategoriesImport', 'default', 'lisa_rzCategoriesImport');

        $this->getModule('AMQP')->declareExchange('goods_service', 'topic', false, true, false);
        $this->getModule('AMQP')->declareQueue('goods-lisa', false, true, false, false);

        $this->getModule('AMQP')->declareExchange('marketplace_exchange', 'topic', false, true, false);
        $this->getModule('AMQP')->declareQueue('market_queue', false, true, false, false);

    }
}
